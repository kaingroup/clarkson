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
$mastheadimage = (!empty($page->masthead_image->url)) ? $page->masthead_image->url : $urls->templates . 'img/faq_header1.jpg';
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
							<h1><?php echo $page->title; ?></h1>
						</div>                  				
					</div>
					<div class="col-md-6">
						
					</div>
                </div>
            </div>
        </div>		
        <!-- End particles js -->

   
	<!-- SIDEBAR-AREA START -->
	<div class="help-area">
            <div class="container">
                <div class="row">
                    <!-- CONTACT-ACCORDION START -->
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="content-asked">
                            <ul id="tabs" class="nav" data-bs-tabs="tabs">
								<?php 
								$tablist = '';
								$tabcontent = '';
								$i = 1;
								$accordion = 1;
								foreach($page->faq_categories as $category):
									$active = ($i == 1)? 'active':'';
									$tablist .= '<li><a class="'.$active.'" href="#tab'.$category->id.'" data-bs-toggle="tab">'.$category->title.'</a></li>';

									$tabcontent .= '<div class="tab-pane '.$active.'" id="tab'.$category->id.'">
                                    <div class="asked-tab">
                                        <div class="panel-group" id="faq-group'.$i.'">
                                            <ul>


                                ';
									foreach($category->faq_items as $item){
										$tabcontent .= '<li class="panel">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-bs-toggle="collapse" data-bs-parent="#faq-group'.$i.'" href="#faq-item'.$accordion.'">
                                                        <i class="fa fa-credit-card"></i> '.$item->faq_question.'
                                                        </a>
                                                        </h4>
                                                    </div>
                                                    <div id="faq-item'.$accordion.'" class="panel-collapse collapse">
                                                    <!-- panel body -->
                                                        <div class="panel-body">
                                                        '.$item->faq_answer.'
                                                        </div>
                                                    </div>    
                                                </li>';
												$accordion++;
									}

									$tabcontent .= '</ul> 
                                        </div>
                                    </div>
                                </div>';	
									$i++;
								endforeach;?>
                                <?php echo $tablist;?>
                            </ul>
                            <div id="my-tab-content" class="tab-content">
								<?php echo $tabcontent;?>
                            </div>
                        </div>
                    </div>      
                    <!-- LEFT SIDEBAR START -->
                    <div class="col-xl-4 col-lg-4 col-md-4 asked-border">
                        <div class="help-right res-mrg-top-xs">
                            <div class="we-reply">
                                <h5>We reply on all questions within</h5>
                                <span>24/7</span>
                                <h6>We offer support for our customers</h6>
                                <p><strong>Mon - Fri 8:00am - 6:00pm (GMT +3)</strong></p>
                            </div>
                            <!-- HELP-FORUM START -->
                            <div class="help-forum">
                                <h4><strong>Client Portal</strong></h4>
                                <p>Manage your client information</p>
                                <a href="https://inscloud.net/clarkson_uganda/client_portal">Go to portal</a>
                            </div>
                            <!-- HELP-FORUM END -->
                            
                            <!-- HELP-FORUM START -->
                            <div class="help-forum">
                                <h4><strong>Contact form</strong></h4>
                                <p>We would love to get your feedback from you.</p>
                                <a href="/uganda/contact-us"> Write us</a>
                            </div>
                            <!-- HELP-FORUM END -->
                            
                            <!-- HELP-FORUM START -->
                            <div class="help-forum">
                                <h4><strong>iCloud Uganda</strong></h4>
                                
                                <a href="https://inscloud.net/clarkson_uganda/login.php"> Go to iCloud</a>
                            </div>
                            <!-- HELP-FORUM END -->
                        </div>
                        </div>
                    <!-- LEFT SIDEBAR START -->             
                </div>
            </div>
        </div>
        <!-- SIDEBAR-AREA END -->
    
	

        <!-- Start footer -->
        <?php include('./_footer.php'); // include footer markup ?>
		<!-- End footer -->
        
        <!-- JS -->

		<?php include('./_scripts.php'); ?>

        <!-- FAQ Schema.org Structured Data -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                <?php
                $faqItems = [];
                foreach($page->faq_categories as $category) {
                    foreach($category->faq_items as $item) {
                        $question = addslashes(strip_tags($item->faq_question));
                        $answer = addslashes(strip_tags($item->faq_answer));
                        $faqItems[] = '{
                            "@type": "Question",
                            "name": "' . $question . '",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "' . $answer . '"
                            }
                        }';
                    }
                }
                echo implode(',', $faqItems);
                ?>
            ]
        }
        </script>
    </body>


</html>


