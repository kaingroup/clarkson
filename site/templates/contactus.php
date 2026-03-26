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
        <?php
        $mastheadimage = (!empty($page->masthead_image->url)) ? $page->masthead_image->url : $urls->templates . 'img/about/header1.jpg';
        ?>
        #particles-js {
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


    <!-- contact-page-area start -->
    <div class="contact-page-area main-contact">
        <div class="container">
            <div class="row no-gutters">
                <!-- contact-map start -->
                <div class="col-xl-8 col-lg-8 col-md-8 contact-main">
                    <div class="contact-mapm border border-dark">
                        <div class="map-size">

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7595570346707!2d32.619181700000006!3d0.31096730000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbc05cb406931%3A0x1e43aa85c1877f73!2s67%20Luthuli%20Ave%2C%20Kampala!5e0!3m2!1sen!2sug!4v1682316283373!5m2!1sen!2sug"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <!-- contact-map end -->
                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="company-location">
                        <div class="locatopn-inner">
                            <div class="location-box">
                                <div class="company-loc-icon">
                                    <i class="list-img-icon li li-map-pin"></i>
                                </div>
                                <div class="company-loc-text">
                                    <h3>Company Location</h3>
                                    <p>
                                        <?php echo $page->contact_location; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="location-box">
                                <div class="company-loc-icon">
                                    <i class="list-img-icon li li-mail-envelope"></i>
                                </div>
                                <div class="company-loc-text">
                                    <h3>Official E-mail Address</h3>
                                    <p><a href="mailto:<?php echo $page->contact_email; ?>"><?php echo $page->contact_email; ?></a></p>
                                </div>
                            </div>
                            <div class="location-box">
                                <div class="company-loc-icon">
                                    <i class="list-img-icon li li-phone"></i>
                                </div>
                                <div class="company-loc-text">
                                    <h3>Phone Or Fax Number</h3>
                                    <p><a href="tel:<?php echo $page->contact_phone; ?>"><?php echo $page->contact_phone; ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-main-area">
                <div class="row">
                    <!-- contact-accordion start -->
                    <div class="col-12">
                        <div class="contact-title">
                            <h2>CONTACT US</h2>
                            <span>
                                <i class="fa fa-envelope-o" style="color: #ff6a00"></i>
                            </span>
                        </div>
                    </div>
                    <!-- contact-accordion end -->
                    <div class="col-12">
                        <div class="contact-form-aream">
                            <form id="contact-form" action="">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="control-group">
                                            <label class="control-label" for="inputname">Name</label>
                                            <input type="text" id="inputname" name="con_name" placeholder="Your Name">
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputemail">Email</label>
                                            <input type="email" id="inputemail" name="con_email"
                                                placeholder="Email address">
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputsubject">Subject</label>
                                            <input type="text" id="inputsubject" name="con_subject"
                                                placeholder="Message Subject">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="control-group">
                                            <label class="control-label" for="inputmessage">Message</label>
                                            <textarea id="inputmessage" name="con_message"
                                                placeholder="Your Message here" cols="30" rows="10" required></textarea>
                                        </div>
                                        <div class="control-group">
                                            <button type="submit" class="readon contact-border border pulse"
                                                name="submit">submit</button>
                                            <p class="form-message"></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-page-area end -->



    <!-- Start footer -->
    <?php include('./_footer.php'); // include footer markup ?>
    <!-- End footer -->

    <!-- JS -->

    <?php include('./_scripts.php'); ?>
</body>


</html>