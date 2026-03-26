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

    <div class="creative-member-area team-member-area">
        <div class="container">
            <!-- section-heading start -->
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h1>
                            <?php echo $page->title; ?>
                        </h1>
                        <?php echo $page->body; ?>
                    </div>
                </div>
            </div>
            <!-- section-heading end -->
        </div>
    </div>

    <div class="service-dev-area">
        <div class="container">
                                        <?php

// --- Some default variables ---
$success_message   = "<div class='alert alert-primary' role='alert'>Your CV has been successfully submitted. Thanks for your submission!</div>";

// --- All form fields as nested array ---
// using html form field name => template field nam, from the page you're going to create
$form_fields = array(
    'career_listing'              => array('type' => 'text', 'value' => '', 'required' => false),
    'files'  => array('type' => 'file', 'value' => 0, 'required' => true),
);

// --- WireUpload settings ---
$upload_path        = $config->paths->assets . "files/.tmp_uploads/"; // tmp upload folder
$file_extensions    = array('xls','xlsx','pdf','doc','docx','jpg','png', 'jpeg', 'gif');
$max_files          = 1;
$max_upload_size    = 10*1024*1024; // make sure PHP's upload and post max size is also set to a reasonable size
$overwrite          = false;

// --- Page creation settings ---
$template           = "_cvsubmission"; // the template used to create the page
$parent             = $pages->get('/cv-submissions/');
$file_field         = "files";
$page_fields        = array('career_listing');
?>
<?php
    include("./process_cv.php");?>
    <?php if($success):?>
    <p><?php echo $success_message; ?></p>
    <?php endif?>
            <?php
            
foreach ($page->careers_repeater as $career) {
    echo $career->render();
}
?>

        </div>
    </div>

    <!-- Start footer -->
    <?php include('./_footer.php'); // include footer markup 
?>
    <!-- End footer -->

    <!-- JS -->

    <?php include('./_scripts.php'); ?>
</body>


</html>