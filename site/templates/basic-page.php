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
        <?php $mastheadimage =( !empty($page->masthead_image->url)) ? $page->masthead_image->url : $urls->templates . 'img/about/header1.jpg';

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


    <?php if (!empty($page->hero[0])): ?>
    <div class="about-intensy-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="about-intensy-text">
                        <h1 class="about-intensy-title">
                            <?php echo $page->hero[0]->title; ?>
                        </h1>
                        <p>
                            <?php echo $page->hero[0]->excerpt; ?>
                        </p>
                        <?php if (!empty($page->hero[0]->bullet_point_repeater[0])): ?>
                        <ul>
                            <?php foreach ($page->hero[0]->bullet_point_repeater as $repeater): ?>
                            <li>
                                <?php echo $repeater->title; ?>
                            </li>
                            <?php
        endforeach; ?>
                        </ul>

                        <?php if (!empty($page->hero[0]->button_label)): ?>
                        <a class="readon border large black pulse" href="<?php echo $page->hero[0]->button_link->url; ?>">
                            <?php echo $page->hero[0]->button_label; ?>
                        </a>
                        <?php
        endif; ?>
                        <?php
    endif; ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="about-intensy-img">
                        <img src="<?php echo $page->hero[0]->image->url; ?>"
                            alt="<?php echo $page->hero[0]->title; ?>" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
endif; ?>
    <?php if (!empty($page->main_title)): ?>
    <div class="office-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="we-work">
                        <h3>
                            <?php echo $page->main_title; ?>
                        </h3>
                        <?php echo $page->body; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
endif; ?>

    <!-- Start office content -->
    <div class="office-content">
        <div class="container">
            <?php if (!empty($page->left_column_title) && !empty($page->right_column_title)): ?>
            <div class="row">
                <div class="col-md-6">
                    <!-- Start we work -->
                    <div class="we-work">
                        <h3>
                            <?php echo $page->left_column_title; ?>
                        </h3>
                        <?php echo $page->left_column_text; ?>
                    </div>
                    <!-- End we work -->
                </div>
                <div class="col-md-6">
                    <!-- Start Our location -->
                    <div class="our-location">
                        <h3>
                            <?php echo $page->right_column_title; ?>
                        </h3>
                        <?php echo $page->right_column_text; ?>
                    </div>
                    <!-- End Our location -->
                </div>
            </div>
            <?php
endif; ?>

            <?php

if (isset($page->gallery) && !empty($page->gallery[0])): ?>
            <div class="our-workplase mt-5">
                <div class="row">
                    <div class="col-12">
                        <h3>Gallery</h3>
                    </div>
                </div>
                <!-- Start Our workplase -->
                <div class="row">
                    <?php foreach ($page->gallery as $item): ?>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <img src="<?php echo $item->image->url; ?>" alt="<?php echo $item->title; ?>">
                    </div>
                    <?php
    endforeach; ?>

                </div>
                <!-- End Our workplase -->
            </div>
            <?php
endif; ?>
        </div>
    </div>
    <!-- End Office content -->



    <!-- Start footer -->
    <?php include('./_footer.php'); // include footer markup 
?>
    <!-- End footer -->

    <!-- JS -->

    <?php include('./_scripts.php'); ?>
</body>


</html>