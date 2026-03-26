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
    
    <div class="single-blog-area qa-area">
            <div class="container">
                <div class="row">
                    <!-- contact-accordion start -->
                    <div class="col-xl-8 col-lg-8 col-md-8 qa-border">
                        <div class="single-blof-image-area">
                            <a class="fancybox w-100" href="<?php echo $page->url; ?>">
                                <img class="img-fluid" src="<?php echo $page->image->url; ?>" alt="<?php echo $page->title; ?>">
                            </a>
                            <div class="itemtoolbar">
                                <p><span><i class="fa fa-clock-o"></i><?php echo $page->pub_datetime; ?></span><span><i class="fa fa-folder-open"></i>In <?php echo (!empty($page->event_date))? 'Event':'News'?></span></p>
                            </div>
                        </div>
                        <div class="single-blog-text-area">
                            <h2><?php echo $page->title; ?></h2>
                            <?php echo $page->body; ?>
                            <!--
                            <div class="blog-share">
                                <p><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-print"></i></a><a href="#"><i class="fa fa-envelope"></i></a></p>
                            </div>-->
                        </div>
                        <!--
                        <div class="single-post-info">
                            <span class="read-time pull-left">Read <b>75</b> times </span>
                            <span class="last-modified pull-right">Last modified on Monday, 10 August 2021 04:33</span>
                        </div>-->
                        
                    </div>                      
                    <!-- left sidebar start -->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-blog-sidebar">
                            
                        <?php 
                        $news  = $pages->find("template=news, limit=6, sort=-pub_datetime");
                        if($news):
                        ?>
                            <!-- start latest post -->
                            <div class="latest-post-single">
                                <h3>LATEST POSTS</h3>
                                <?php 

                    foreach($news as $item):
                        //var_dump($item->country->title);
                        $img = ($item->image) ? $item->image->size(362,251)->url : false;
                        $ev = (!empty($item->event_date))? $item->event_date:$item->pub_datetime;
                        $type = (!empty($item->event_date))? 'Event':'News';
                        
                        $flag = $item->country->title.'.png';
                        ?>
                                <div class="latest-post-box">
                                    <img src="<?php echo $img?>" alt="<?php echo $item->title?>">
                                    <div class="latest-post-details">
                                        <h5><?php echo $item->title?></h5>
                                        <span><i class="fa fa-clock-o"></i> <?php echo $ev?> in <?php echo $type?></span>
                                    </div>
                                </div>
                                <?php endforeach?>
                            </div>
                            <!-- end latest post -->
                            <?php endif?>
                        </div>
                    </div>
                    <!-- left sidebar End -->           
                </div>
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