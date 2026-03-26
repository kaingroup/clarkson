<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
    

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Francis Okoboi, KAINGroup">
        <?php echo $page->seo;?>

        <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $urls->templates?>img/favicon.ico">
        
        <!-- Fonts  -->

        <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Dosis:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

 		<!-- CSS  -->
		
		<!-- Bootstrap CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo $urls->templates?>css/bootstrap.min.css">

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" href="<?php echo $urls->templates?>rs-plugin/css/settings.css" media="screen" />

		<!-- owl.carousel CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo $urls->templates?>css/owl.carousel.css">
        
		<!-- owl.theme CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo $urls->templates?>css/owl.theme.css">
           	
		<!-- owl.transitions CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo $urls->templates?>css/owl.transitions.css">

        <!-- jquery.sidr.dark CSS
        ============================================ -->      
        <link rel="stylesheet" href="<?php echo $urls->templates?>css/jquery.sidr.dark.css">
       
		<!-- font-awesome.min CSS
		============================================ -->      
        <link rel="stylesheet" href="<?php echo $urls->templates?>css/font-awesome.min.css">
        
        
        <!-- linea CSS
        ============================================ -->      
        <link rel="stylesheet" href="<?php echo $urls->templates?>css/linea.css">

        <!-- jquery.fancybox CSS
        ============================================ -->         
        <link rel="stylesheet" href="<?php echo $urls->templates?>css/fancb/jquery.fancybox.css">

 		<!-- animate CSS
		============================================ -->         
        <link rel="stylesheet" href="<?php echo $urls->templates?>css/animate.css">
        
 		<!-- normalize CSS
		============================================ -->        
        <link rel="stylesheet" href="<?php echo $urls->templates?>css/normalize.css">
   
        <!-- main CSS
		============================================ -->          
        <link rel="stylesheet" href="<?php echo $urls->templates?>css/main.css">
        
        <!-- style CSS
		============================================ -->          
        <link rel="stylesheet" href="<?php echo $urls->templates?>css/style.css">
        
        <!-- responsive CSS
		============================================ -->          
        <link rel="stylesheet" href="<?php echo $urls->templates?>css/responsive.css">
        
        <script src="<?php echo $urls->templates?>js/vendor/modernizr-3.11.2.min.js"></script>
        <style>
  svg text {
    font-family: "Open Sans" !important;
  }
</style>
    </head>
    <body class="home-4">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Start header -->
        <?php include('./_homehtmlheader.php'); ?>
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
        <!-- Start slider -->
        <div class="slider">
		<!-- Start Slider -->
		<div id="slider">
			<div class="tp-banner-container">
				<div class="fullwidthbanner-4">
					<ul>
						<?php
						/*$sliders = $page->home_page_slider;
						foreach ($sliders as $slide) {
							echo $slide->render();
						}*/
            $uganda = $pages->get(1179);
						foreach ($uganda->country_slider as $slide) {
							echo $slide->render();
						}
						?>
					</ul>
					<div class="tp-bannertimer"></div>
				</div>

			</div>
		</div>
		<!-- End Slider -->
	</div>
        <!-- End slider -->
        <!-- Start Work Proses -->
        <div class="work-proses">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="front">
                                <div class="featured4-one">
                                    <a href="/kenya">VIEW MORE DETAILS</a>
                                </div>
                            </div>
                            <div class="back">
                                <div class="featured4-one bac">
                                    <h3>KENYA</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="front">
                                <div class="featured4-one fe-two">
                                <a href="/uganda">VIEW MORE DETAILS</a>
                                </div>
                            </div>
                            <div class="back">
                                <div class="featured4-one fe-two bac">
                                    <h3>UGANDA</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="front">
                                <div class="featured4-one fe-three">
                                <a href="/tanzania">VIEW MORE DETAILS</a>
                                </div>
                            </div>
                            <div class="back">
                                <div class="featured4-one fe-three bac">
                                    <h3>TANZANIA</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="front">
                                <div class="featured4-one fe-four">
                                <a href="/zambia/">VIEW MORE DETAILS</a>
                                </div>
                            </div>
                            <div class="back">
                                <div class="featured4-one fe-four bac">
                                    <h3>ZAMBIA</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Work Proses -->
        
        <div class="optimize-area mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 px-5">
                        <div class="area-title">
                                <h3>WHAT DRIVES US</h3>
                                
                            </div>
                            
                    </div>
                    <div class="col-4 px-5">
                        <div class="d-flex flex-column">
                            <p class="text-center"><img alt="OurVision.svg" src="/site/templates/svgs/OurValues.svg" width="150" /></p>
                            <div class="text-center"><p>OUR VALUES</p>
                            <div class="row g-2">
                                <div class="col-6 py-2">
                                    <a data-bs-toggle="collapse" href="#valAudacity" role="button" aria-expanded="false" class="text-decoration-none text-dark"><strong>Audacity</strong> <i class="fa fa-chevron-down fa-xs"></i></a>
                                    <div class="collapse text-start small mt-1" id="valAudacity">We are courageous and daring and take bold, calculated risk for the benefit of our stakeholders.</div>
                                </div>
                                <div class="col-6 py-2">
                                    <a data-bs-toggle="collapse" href="#valTrust" role="button" aria-expanded="false" class="text-decoration-none text-dark"><strong>Trust</strong> <i class="fa fa-chevron-down fa-xs"></i></a>
                                    <div class="collapse text-start small mt-1" id="valTrust">We engage collaboratively in an open and honest way building positive business relationships.</div>
                                </div>
                                <div class="col-6 py-2">
                                    <a data-bs-toggle="collapse" href="#valSimplicity" role="button" aria-expanded="false" class="text-decoration-none text-dark"><strong>Simplicity</strong> <i class="fa fa-chevron-down fa-xs"></i></a>
                                    <div class="collapse text-start small mt-1" id="valSimplicity">We keep things simple so as to deliver better results, always.</div>
                                </div>
                                <div class="col-6 py-2">
                                    <a data-bs-toggle="collapse" href="#valIntegrity" role="button" aria-expanded="false" class="text-decoration-none text-dark"><strong>Integrity</strong> <i class="fa fa-chevron-down fa-xs"></i></a>
                                    <div class="collapse text-start small mt-1" id="valIntegrity">We act ethically and in good faith, fostering an environment of accountability every day.</div>
                                </div>
                                <div class="col-6 py-2">
                                    <a data-bs-toggle="collapse" href="#valCare" role="button" aria-expanded="false" class="text-decoration-none text-dark"><strong>Care</strong> <i class="fa fa-chevron-down fa-xs"></i></a>
                                    <div class="collapse text-start small mt-1" id="valCare">We are genuinely concerned for our stakeholders' satisfaction and positive experience.</div>
                                </div>
                                <div class="col-6 py-2">
                                    <a data-bs-toggle="collapse" href="#valTeamwork" role="button" aria-expanded="false" class="text-decoration-none text-dark"><strong>Teamwork</strong> <i class="fa fa-chevron-down fa-xs"></i></a>
                                    <div class="collapse text-start small mt-1" id="valTeamwork">We are one and are collectively responsible for our overall success.</div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 px-5">
                        <div class="d-flex flex-column">
                            <p class="text-center"><img alt="OurVision.svg" src="/site/templates/svgs/OurVision.svg" width="150" /></p>
                            <div class="text-center"><p>OUR VISION</p>
                            <p class="text-center">Safeguarding today's and tomorrow's generations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 px-5">
                        <div class="d-flex flex-column">
                            <p class="text-center"><img alt="OurVision.svg" src="/site/templates/svgs/OurMission.svg" width="150" /></p>
                            <div class="text-center"><p>OUR MISSION</p>
                            <p class="text-center">Transforming society by delivering innovative risk management services for the good of all stakeholders.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Start optimize area -->
        <div class="optimize-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 px-5">
                        <div class="area-title">
                                <h3>ABOUT CLARKSON INSURANCE BROKERS</h3>
                                <h2>OUR HISTORY</h2>
                            </div>
                            <div><img src="/site/templates/svgs/CLKSN_ILLUSTRATIONS.svg" alt=""></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 px-5">
                        <div class="area-header">
                            
                            <p>Clarkson is a leading regional provider of insurance brokerage services, risk management services, medical insurance services and employee benefits consultancy services.</p>
<p>Our legacy as one of the oldest insurance brokers in East and Southern Africa, dates as far back as 1958 specifically in Kenya. This experience places Clarkson in the enviable position of perhaps being the oldest locally owned insurance brokerage company in the region.</p>
<p>We trace our origins to two United Kingdom companies&mdash;H. Clarkson &amp; Southern Co. Ltd&nbsp;and&nbsp;Ernest A. Notcutt &amp; Co. Ltd. All these predecessor companies were international but holding local interests in Kenya at the time.&nbsp;</p>
<p>In Uganda, Clarkson started operations in 1972 but had to close due to the political instability at the time. However, the company re-opened and has operated in Uganda since 2004 and is currently one of the largest Insurance Brokerage Firms.</p>
<p>In Tanzania, Clarkson Insurance Brokers officially started operations on 28<sup>th</sup> October 2016.</p>

                        </div>
                        
                    </div>
                    <div class="area-header col-12 col-md-6 col-lg-6 position-relative">
                        
                        <p>The forth footprint of Clarkson is in Zambia where we have extended our presence operating as Clarkson Insurance &amp; Risk Services Ltd since 2019.</p>
<p>For over 60 years that Clarkson has existed, our success has been founded on the solid commitment to personal integrity, ethics, honesty and openness in all dealings.</p>
<p>The board of directors and the senior management team embrace these principals and irrespective of the size or nature of the client, the philosophy of the company has always been to give a thoroughly professional and high quality service to clients.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End optimize area -->
        
        <!-- Start our sensitive area -->
        <div class="our-sensitive-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="sensitive-title text-center">
                            <h1>OUR DIRECTORS</h1>
                            <p>A multi-dimensional and experienced board leadership  </p>
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
                                <h3><?php echo $pg->title; ?></h3>
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
        
        
        
        
        
        
    


        <?php 
        $news  = $pages->find("template=news, limit=15, sort=-pub_datetime");
        if($news):
        ?>
        <!-- Start emargency carosel area9 -->
        <div class="emargency-carosel-area9">
            <div class="container">
                <div class="emargency-carosel">
                    <?php 

                    foreach($news as $item):
                        //var_dump($item->country->title);
                        $img = ($item->image) ? $item->image->size(362,251)->url : false;
                        $ev = (!empty($item->event_date))? $item->event_date:$item->pub_datetime;
                        $type = (!empty($item->event_date))? 'Event':'News';
                        
                        $flag = $item->country->title.'.png';
                        ?>
                    <!-- Start emargency box9 -->
                    <div class="emargency-box9">
                        <div class="imargency-image9">
                            <img src="<?php echo $img?>" alt="<?php echo $item->title?>">
                            
                            <div class="imargencyimage9-link">
                                <a class="search9 search fancybox" data-fancybox-group="gallery" href="<?php echo $item->image->url()?>" ><i class="fa fa-search"></i></a>
                                <a class="link9 link" href="<?php echo $item->url?>"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="imargency-details9">
                            <div class="imargency-info9">
                                <p><?php echo $ev?> <span><?php echo $type?></span></p>
                                <img src="/site/templates/images/<?php echo $flag?>" style="width:20px; height: 20px; float: right;" />
                            </div>
                            <h3><a href="<?php echo $item->url?>"><?php echo $item->title?></a></h3>
                            <p><?php echo $item->excerpt?></p>
                        </div>
                    </div>
                    <!-- End emargency box9 -->
                    <?php endforeach?>
                </div>
            </div>
        </div>
        <!-- End emargency carosel area9 -->
        <?php endif?>
        
        
        <?php include('./_footer.php'); // include footer markup ?>
        
        <!-- JS -->

 		<!-- jquery
		============================================ -->         
        <script src="<?php echo $urls->templates?>js/vendor/jquery-3.6.0.min.js"></script>
        <script src="<?php echo $urls->templates?>js/vendor/jquery-migrate-3.3.2.min.js"></script>

 		<!-- bootstrap js
		============================================ -->         
        <script src="<?php echo $urls->templates?>js/bootstrap.bundle.min.js"></script>

        <!-- jQuery REVOLUTION Slider  -->
        <script  src="<?php echo $urls->templates?>rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script  src="<?php echo $urls->templates?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script  src="<?php echo $urls->templates?>rs-plugin/js/rs.home.js"></script>

   		<!-- owl.carousel.min js
		============================================ -->       
        <script src="<?php echo $urls->templates?>js/owl.carousel.min.js"></script>
        
        <!-- jquery.sidr.min js
        ============================================ -->       
        <script src="<?php echo $urls->templates?>js/jquery.sidr.min.js"></script>
		
        <!-- jflickrfeed.min js
        ============================================ -->       
        <script src="<?php echo $urls->templates?>js/jflickrfeed.min.js"></script>

        <!-- jqueryui js
        ============================================ -->       
        <script src="<?php echo $urls->templates?>js/jquery.fancybox.js"></script>

        <!-- jquery.mixitup.min js
        ============================================ -->       
        <script src="<?php echo $urls->templates?>js/jquery.mixitup.min.js"></script>

        <!-- countown js
        ============================================ -->       
        <script src="<?php echo $urls->templates?>js/jquery.countdown.min.js"></script>

        <!-- jquery scrollUp min js
        ============================================ -->       
        <script src="<?php echo $urls->templates?>js/jquery.scrollUp.min.js"></script>

		<!-- counterup min js
        ============================================ -->
		<script src="<?php echo $urls->templates?>js/counterup.min.js"></script>
		
		<!-- waypoints min js
        ============================================ --> 
		<script src="<?php echo $urls->templates?>js/waypoints.min.js"></script>

   		<!-- wow js
		============================================ -->       
        <script src="<?php echo $urls->templates?>js/wow.js"></script>
        <script>
            new WOW().init();
        </script> 
   		<!-- plugins js
		============================================ -->         
        <script src="<?php echo $urls->templates?>js/plugins.js"></script>
        
   		<!-- main js
		============================================ -->           
        <script src="<?php echo $urls->templates?>js/main.js"></script>
    </body>


</html>
