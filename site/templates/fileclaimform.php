<?php

namespace ProcessWire; ?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
<?php include('./_header.php'); ?>

<body class="pages home-4">
    <style>
        <?php $mastheadimage = (!empty($page->masthead_image->url)) ? $page->masthead_image->url : $urls->templates . 'img/about/header1.jpg';

        ?>#particles-js {
            background: rgba(0, 0, 0, 0) url("<?php echo $mastheadimage; ?>") repeat scroll 0 0;
        }
    </style>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start header -->
    <?php include('./_htmlheader.php'); ?>
    <!-- End header -->
    <div id="sidr-right" class="sidr right" style="display: none;">
        <div class="side-search">
            <div class="header-search">
                <form action="#">
                    <span class="search-button"><i class="fa fa-search"></i></span>
                    <input type="text" placeholder="search...">
                </form>
            </div>
        </div>
        <?php include('./_sidemenu.php'); ?>
    </div>
    <!-- Start main menu -->
    <?php include('./_mainmenu.php'); ?>
    <!-- End main menu -->


    <!-- Start particles js -->
    <div id="particles-js">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-title-k">
                        <h1>
                            <?php echo $page->title; ?>
                        </h1>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>
    <!-- End particles js -->

        <!-- contact-page-area start -->
    <div class="contact-page-area main-contact">
        <div class="container">
            
            <div class="contact-main-area">
                <div class="row">
                    <!-- contact-accordion start -->
                    <div class="col-12">
                        <div class="contact-title">
                            <h2><?php echo $page->title?></h2>
                            <span>
                                <i class="fa fa-envelope-o" style="color: #ff6a00"></i>
                            </span>
                        </div>
                        <?php echo $page->body?>
                    </div>
                    <!-- contact-accordion end -->
                    <div class="col-12">
                        <div class="contact-form-aream">
                            <?php
                            //$successMessage = $session->get('message');
//$warningMessage = $session->get('warning');
//$errorMessage = $session->get('error');



// --- Some default variables ---
$success_message   = "<div class='alert alert-primary' role='alert'>Thanks for your submission!</div>";

// --- All form fields as nested array ---
// using html form field name => template field nam, from the page you're going to create
$form_fields = array(
    'claimtype'              => array('type' => 'text', 'value' => '', 'required' => true),
    'first_name'              => array('type' => 'text', 'value' => '', 'required' => true),
    'last_name'              => array('type' => 'text', 'value' => '', 'required' => true),
    'form_email'                 => array('type' => 'email', 'value' => '', 'required' => true),
    'country'               => array('type' => 'select', 'value' => '', 'required' => false),
    'claim_file'  => array('type' => 'file', 'value' => 0, 'required' => true),
    'insurance_types'               => array('type' => 'select', 'value' => '', 'required' => false),
    'body'               => array('type' => 'textarea', 'value' => '', 'required' => false),
);

// --- WireUpload settings ---
$upload_path        = $config->paths->assets . "files/.tmp_uploads/"; // tmp upload folder
$file_extensions    = array('xls','xlsx','pdf','doc','docx','jpg','png', 'jpeg', 'gif');
$max_files          = 1;
$max_upload_size    = 10*1024*1024; // make sure PHP's upload and post max size is also set to a reasonable size
$overwrite          = false;

// --- Page creation settings ---
$template           = "claim"; // the template used to create the page
$parent             = $pages->get("/file-a-claim/");
$file_field         = "claim_file";
$page_fields        = array('claimtype',
'country',
'first_name',
'last_name',
'form_email',
'insurance_types',
'body',
);
?>

<?php
    include("./process_claim.php");?>

<?php if(!$success) : ?>
    <?php if(!empty($errors)){
echo showError("Form contains errors");
    }  ?>
    <?php if(!empty($errors['csrf'])) echo showError($errors['csrf']); ?>

                            <form id="contact-form2" method="post" enctype='multipart/form-data' action="./">
                            <input type="hidden" name="<?php echo $session->CSRF->getTokenName(); ?>" value="<?php echo $session->CSRF->getTokenValue(); ?>"/>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12 mb-4">
                                        <div class="control-group">
                                        <label class="control-label" for="firstname">Client type</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox1" name="claimtype" value="individual" required>
                                                <label class="form-check-label" for="inlineCheckbox1">Individual</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="inlineCheckbox2" name="claimtype" value="corporate" required>
                                                <label class="form-check-label" for="inlineCheckbox2">Corporate</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="control-group">
                                            <label class="control-label" for="first_name">First Name</label>
                                            <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
                                            <?php if(isset($errors['first_name'])) echo showError($errors['first_name']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="control-group">
                                            <label class="control-label" for="last_name">Last Name</label>
                                            <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
                                            <?php if(isset($errors['last_name'])) echo showError($errors['last_name']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="control-group">
                                            <label class="control-label" for="form_email">Email</label>
                                            <input type="email" id="form_email" name="form_email" placeholder="Email" required>
                                            <?php if(isset($errors['form_email'])) echo showError($errors['form_email']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="control-group">
                                            <label class="control-label" for="country">Country</label>
                                            <select id="country" name="country" class="form-select" aria-label="Select a country">
                                                <option selected>Select a country</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Zambia">Zambia</option>
                                            </select>
                                        </div>
                                    </div>

                                    
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Please upload your claim documents</label>
                                            <input class="form-control" type="file" id="formFile" name="claim_file" required>
                                            <?php
                                                // show upload errors
                                                if(isset($errors['claim_file'])){
                                                    // if multiple errors
                                                    if(is_array($errors['claim_file'])){
                                                        foreach($errors['claim_file'] as $e){
                                                            echo showError($e);
                                                        }
                                                    } else { // if single error
                                                        echo showError($errors['claim_file']);
                                                    }
                                                }
                                                ?>
                                        </div>
                                    </div>

                                    
                                    <?php 

                                        $allservices = $pages->get(1458);
                                        $services = $allservices->service;

                                        $extractedListItems = [];

                                        $options = '<option selected>Please select a product</option>';
                                        foreach ($services as $service) {
                                            if(!empty($service->cover_types)){
                                                $dom = new \DOMDocument();
                                                $dom->loadHTML($service->cover_types);

                                                $liElements = $dom->getElementsByTagName('li');

                                                

                                                foreach ($liElements as $li) {
                                                    $extractedListItems[] = $li->textContent;
                                                }

                                                
                                            }
                                        }

                                        asort($extractedListItems);
                                        foreach ($extractedListItems as $li) {
                                                    $options .= '<option value="'.$li.'">'.$li.'</option>';
                                                    
                                                }
                                    ?>

                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="control-group">
                                            <label class="control-label" for="insurance_type">Insurance product</label>
                                            <select class="form-select" size="1" id="insurance_types" name="insurance_types[]" aria-label="multiple products select">
                                                <?php echo $options;?>
                                            </select>
                                        </div>
                                    </div>   
                                    
                                    



                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="control-group">
                                            <label class="control-label" for="body">Claims Details</label>
                                            <textarea id="body" name="body"
                                                placeholder="Your Message here" cols="30" rows="10" required></textarea>
                                        </div>
                                        <div class="control-group">
                                        <input type="hidden" name="action" id="action" value="send"/>
                                            <button type="submit" class="readon contact-border border pulse"
                                                name="submit" value="submit">submit</button>
                                            <p class="form-message"></p>
                                        </div>
                                    </div>


                                </div>
                            </form>
                            <?php else: ?>

<p><?php echo $success_message; ?></p>
                            <?php endif?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-page-area end -->
    
    

    <!-- Start footer -->
    <?php include('./_footer.php'); // include footer markup 
?>
    <!-- End footer -->

    <!-- JS -->

    <?php include('./_scripts.php'); ?>
</body>


</html>