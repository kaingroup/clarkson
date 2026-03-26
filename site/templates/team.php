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

    <!-- Start our sensitive area -->
    <div class="our-sensitive-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="sensitive-title text-center">
                            <h1><?php echo $page->title; ?></h1>
                            <?php echo $page->body; ?>
                        </div>
                    </div>
                    <?php
                    $board = $page->team;
                    
                foreach ($board as $t) {
                    $team = $t->team_member_link;
                    $pg = $pages->get($team->id);//print_r($pg);die;
                  $img = ($pg->image) ? $pg->image->size(260,308)->url : false;
                    ?>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="sensitive-box">
                            <div class="sensitive-image">
                                <img src="<?php echo $img ?>" alt="<?php echo $pg->title; ?>">
                            </div>
                            <div class="sensitive-info text-center">
                                <h3 class="text-white"></h3><?php echo $pg->title; ?></h3>
                                <span><?php echo $t->title; ?></span>
                                <?php echo $pg->secondary_text; ?>
                                <div class="border-0 mt-3">
                                    
                                        <a class="readon" href="<?php echo $pg->url; ?>" >Read more</a>
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </div>
            </div>
        </div>
        <!-- End our sensitive area -->



    <!-- Start footer -->
    <?php include('./_footer.php'); // include footer markup 
    ?>
    <!-- End footer -->

    <!-- JS -->

    <?php include('./_scripts.php'); ?>
</body>


</html>