<?php
require_once('index.php'); // Include ProcessWire's index.php for access to the API

if ($input->post->submit) { // Check if the form was submitted
    $fullName = $sanitizer->text($input->post->fullname);
    $phone = $sanitizer->text($input->post->phone);
    $email = $sanitizer->email($input->post->email);
    $insuranceType = $sanitizer->text($input->post->insurance_type);
    $otherInsurance = $sanitizer->text($input->post->other_insurance);
    $mesg = $sanitizer->textarea($input->post->con_message);

    // If "Other" was selected, append the specification
    $finalInsuranceType = $insuranceType;
    if ($insuranceType === 'Other' && !empty($otherInsurance)) {
        $finalInsuranceType = 'Other: ' . $otherInsurance;
    }

    // Create a new page to store form data
    $newPage = $pages->newPage();
    $newPage->template = "requestquote"; // Change to your desired template
    $newPage->parent = $pages->get(1793); // Set the parent page where you want to store form submissions
    $newPage->title = "Quote Submission " . date("Y-m-d H:i:s"); // Set a title for the submission
    $newPage->of(false); // Turn off output formatting temporarily
    $newPage->first_name = $fullName; // Using first_name field for full name
    $newPage->form_email = $email;
    $newPage->insurance_types = $finalInsuranceType;
    $newPage->body = $mesg;
    // Store phone in an available field or add custom field in ProcessWire admin
    if ($newPage->hasField('phone')) {
        $newPage->phone = $phone;
    }

    if ($newPage->save()) {
        $body = "New Quote Request\n\n";
        $body .= "Full Name: " . $fullName . "\n";
        $body .= "Phone: " . $phone . "\n";
        $body .= "Email: " . $email . "\n";
        $body .= "Insurance Type: " . $finalInsuranceType . "\n";
        $body .= "Additional Information: " . $mesg . "\n";
        $body .= "\nSubmitted on: " . date("Y-m-d H:i:s");

        $to = 'underwritingug@clarkson-group.com';
        $m = \ProcessWire\wireMail();
        $m->to($to)->from($email);
        $m->subject('Request for Insurance Quote');
        $m->body($body);
        $m->send();

        // Success message as per client requirements
        $session->qmessage = "Thank you. Our team will review your request and contact you within 24 hours.";
        $session->redirect($newPage->parent->url);
    } else {
        // Error occurred while saving form data
        $session->qerror = "Error saving form submission. Please try again.";
        $session->redirect($newPage->parent->url);
    }
}


?>
