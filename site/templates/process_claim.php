<?php

// ------------------------------ FORM Processing ---------------------------------------

$errors            = null;
$success           = false;

// helper function to format form errors
function showError($e){
    return "<div class='alert alert-danger' role='alert'>$e</div>";
}

// dump some variables
// var_dump($_FILES,$_POST,$_SESSION);

/**
 * Cast and save field values in array $form_fields
 * this is also done even form not submited to make populating the form later easier.
 *
 * Also used for pupulating page when form was valid
 */
$required_fields = array();
foreach($form_fields as $key => $f){
    if($f['type'] == 'text'){
        $form_fields[$key]['value'] = $sanitizer->text($input->post->$key);
    }
    if($f['type'] == 'textarea'){
        $form_fields[$key]['value'] = $sanitizer->textarea($input->post->$key);
    }
    if($f['type'] == 'email'){
        $form_fields[$key]['value'] = $sanitizer->email($input->post->$key);
    }
    if($f['type'] == 'radio' || $f['type'] == 'select'){
        $form_fields[$key]['value'] = $sanitizer->text($input->post->$key);
    }
    // store required fields in array
    if($f['required']) $required_fields[] = $key;
}

$products = '';
if($input->post->insurance_types){
    foreach($input->post->insurance_types as $ptype){
        $products .= $ptype.';';
    }
    $form_fields['insurance_types']['value'] = $products;
}




/**
 * form was submitted, start processing the form
 */

if($input->post->action == 'send'){

    // validate CSRF token first to check if it's a valid request
    if(!$session->CSRF->hasValidToken()){
        $errors['csrf'] = "Form submit was not valid, please try again.";
    }

    /**
     * Ceck for required fields and make sure they have a value
     */
    foreach($required_fields as $req){

        // required upload file field
        if($form_fields[$req]['type'] == 'file'){
            if(empty($_FILES[$req]['name'][0])){
                $errors[$req] = "Select files to upload.";
            }
        // reqired checkbox fields
        } else if($form_fields[$req]['type'] == 'radio'){
            if($form_fields[$req]['value'] == 0){
                $errors[$req] = "Field required";
            }
        // reqired text fields
        } else if($form_fields[$req]['type'] == 'text'
                  || $form_fields[$req]['type'] == 'textarea'
                  || $form_fields[$req]['type'] == 'email'){
            if(!strlen($form_fields[$req]['value'])){
                $errors[$req] = "Field required";
            }
            // reqired email fields
            if($form_fields[$req]['type'] == 'email'){
                if($form_fields[$req]['value'] != $input->post->$req){
                    $errors[$req] = "Please enter a valid Email address.";
                }
            }
        }
    }

    /**
     * if no required errors found yet continue file upload form processing
     */
    if(empty($errors)) {

        // RC: create temp path if it isn't there already
        if(!is_dir($upload_path)) {
            if(!\ProcessWire\wireMkdir($upload_path)) throw new \ProcessWire\WireException("No upload path!");
        }

        // setup new wire upload
        $u = new \ProcessWire\WireUpload($file_field);
        $u->setMaxFiles($max_files);
        $u->setMaxFileSize($max_upload_size);
        $u->setOverwrite($overwrite);
        $u->setDestinationPath($upload_path);
        $u->setValidExtensions($file_extensions);

        // start the upload of the files
        $files = $u->execute();

        // if no errors when uploading files
        if(!$u->getErrors()){

            // create the new page to add field values and uploaded images
            $uploadpage = new \ProcessWire\Page();
            $uploadpage->template = $template;
            $uploadpage->parent = $parent;

            // add title/name and make it unique with time and uniqid
            $uploadpage->title = date("d-m-Y H:i:s") . " - " . uniqid();

            // populate page fields with values using $page_fields array
            foreach($page_fields as $pf){
                if($templates->get($template)->hasField($pf)){
                    $uploadpage->$pf = $form_fields[$pf]['value'];
                } else {
                    throw new \ProcessWire\WireException("Template '$template' has no field: $pf");
                }
            }

            // RC: for safety, only add user uploaded files to an unpublished page, for later approval
            // RC: also ensure that using v2.3+, and $config->pagefileSecure=true; in your /site/config.php
            $uploadpage->addStatus(\ProcessWire\Page::statusUnpublished);
            $uploadpage->save();

            // Now page is created we can add images upload to the page file field
            foreach($files as $filename) {
                $uploadpage->$file_field = $upload_path . $filename;
                // remove tmp file uploaded
                unlink($upload_path . $filename);
            }
            $uploadpage->save();

            // $success_message .= "<p>Page created: <a href='$uploadpage->url'>$uploadpage->title</a></p>";
            $success = true;

            // reset the token so no double posts happen
            // also prevent submit button to from double clicking is a good pratice
            $session->CSRF->resetToken();
            $body = $form_fields['first_name']['value'].' '.$form_fields['last_name']['value'].' from '.$form_fields['country']['value'].' has filed a claim on '.date("Y-m-d H:i:s").' regarding the following products '.str_replace(';',', ',$products).'. Additional information: '.$mesg;
            $to = ($form_fields['country']['value'] == 'Kenya')? 'claims@clarkson-group.com':'claimsug@clarkson-group.com';
            
            $m = \ProcessWire\wireMail();
            $m->to($to)->from($form_fields['form_email']['value']);
            $m->subject('File a claim');
            $m->body($body);
            $m->attachment($uploadpage->claim_file->filename);
            $m->send();

        } else {
            // errors found
            $success = false;

            // remove files uploaded
            foreach($files as $filename) unlink($upload_path . $filename);

            // get the errors
            if(count($u->getErrors()) > 1){ // if multiple error
                foreach($u->getErrors() as $e) {
                    $errors[$file_field][] = $e;
                }
            } else { // if single error
                $errors[$file_field] = $u->getErrors();
            }
        }
    }
}