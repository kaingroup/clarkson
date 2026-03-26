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
                <div class="col-md-12 text-center">
                    <div class="top-title-k">
                        <h1>Get an Insurance Quote Tailored to Your Needs</h1>
                        <p style="color: #fff; font-size: 18px; margin-top: 15px;">Tell us a bit about your needs and our team will get back to you with the best insurance options to cover you.</p>
                    </div>
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

if ($session->qmessage) {
    echo "<div class='alert alert-primary' role='alert'>$session->qmessage</div>";
    $session->qmessage = false;
}

if ($session->qwarning) {
    echo "<div class='alert alert-warning' role='alert'>$session->qwarning</div>";
    $session->qwarning = false;
}

if ($session->qerror) {
    echo "<div class='alert alert-danger' role='alert'>$session->qerror</div>";
    $session->qerror = false;
}?>

                            <form id="contact-form2" method="post" action="/process_quote.php">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="control-group">
                                            <label class="control-label" for="fullname">Full Name</label>
                                            <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="control-group">
                                            <label class="control-label" for="phone">Phone Number</label>
                                            <input type="tel" id="phone" name="phone" placeholder="+256..." required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="control-group">
                                            <label class="control-label" for="email">Email Address</label>
                                            <input type="email" id="email" name="email" placeholder="Enter your email" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="control-group">
                                            <label class="control-label" for="insurance_type">Type of Insurance</label>
                                            <select id="insurance_type" name="insurance_type" class="form-select" aria-label="Select insurance type" required>
                                                <option value="" selected>Select insurance type</option>
                                                <option value="Motor Insurance">Motor Insurance</option>
                                                <option value="Medical Insurance">Medical Insurance</option>
                                                <option value="Life Insurance">Life Insurance</option>
                                                <option value="Business Insurance">Business Insurance</option>
                                                <option value="Property Insurance">Property Insurance</option>
                                                <option value="Travel Insurance">Travel Insurance</option>
                                                <option value="Other">Other (please specify)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6" id="other_insurance_wrapper" style="display: none;">
                                        <div class="control-group">
                                            <label class="control-label" for="other_insurance">Please specify</label>
                                            <input type="text" id="other_insurance" name="other_insurance" placeholder="Please specify the insurance type">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="control-group">
                                            <label class="control-label" for="inputmessage">Additional Info</label>
                                            <textarea id="inputmessage" name="con_message"
                                                placeholder="Tell us more about your insurance needs" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="control-group">
                                            <button type="submit" class="readon contact-border border pulse"
                                                name="submit" value="submit">Submit</button>
                                            <p class="form-message"></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <script>
                                document.getElementById('insurance_type').addEventListener('change', function() {
                                    var otherWrapper = document.getElementById('other_insurance_wrapper');
                                    var otherInput = document.getElementById('other_insurance');
                                    if (this.value === 'Other') {
                                        otherWrapper.style.display = 'block';
                                        otherInput.required = true;
                                    } else {
                                        otherWrapper.style.display = 'none';
                                        otherInput.required = false;
                                        otherInput.value = '';
                                    }
                                });
                            </script>
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