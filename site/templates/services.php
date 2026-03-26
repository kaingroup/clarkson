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
    
    <div class="service-dev-area">
        <div class="container">

            <div class="row">
                
            
                
                    
                    
                
                <div class="col-sm-12 col-md-12 ">
                <div class="emargency-one em-four h-100">
                <div class="emargency-box we-work">
                <?php echo $page->body;?></div>
                    
                </div>    
                </div>
                
                
            </div>

            <?php

            if(!empty($page->secondary_text)){?>
<div class="row">
                
            
                
                    
                    
                
                <div class="col-sm-12 col-md-12 ">
                <div class="h-100">
                <div class="we-work">
                <?php echo $page->secondary_text;?></div>
                    
                </div>    
                </div>
                
                
            </div>
<?php
            }
?>


              
            <div class="d-flex justify-content-center row gap-3">
            <?php 
        $services = $page->service;
        if ($services) {
                            $i=1;
            foreach ($services as $service) {
                                        
                    if($i%2 == 1):?>
                                <div class="d-flex flex-column col-sm-12 col-md-5 p-2 bg-white border rounded mt-2">
                                    <div class="d-flex flex-row">
                                    <div class="col-md-3 mt-1 pe-2"><img class="img-fluid img-responsive rounded product-image" src="<?php echo $service->image->url;?>"></div>
                                        <div class="col-md-9 mt-1 mx-2 ps-3">
                                            <h5><?php echo $service->title;?></h5>
                                            <p class="text-justify para mb-0 me-1"><?php echo $service->excerpt;?><br><br>
                                            <!--<a href='/clarkson/request-a-quote/'
            class='readon large'>Request a quote</a>-->
                                            </p>
                                        </div>
                                        
                                                    <?php
                                                    if(!empty($service->cover_types)){
                                                        $dom = new \DOMDocument();
                                                        $dom->loadHTML($service->cover_types);

                                                        $liElements = $dom->getElementsByTagName('li');

                                                        $extractedListItems = [];

                                                        foreach ($liElements as $li) {
                                                            $extractedListItems[] = '&nbsp;'.$li->textContent.'&nbsp;';
                                                        }


                                                    ?>

                                                        
                                                    <?php } ?>
                                    </div>
                                    <?php if(!empty($service->cover_types)){?><div class="col-sm-12"><p class="p-0"><strong><?php echo $service->title;?> products</strong></p><p class="text-justify para mb-0"><?php echo implode(' &starf; ',$extractedListItems)?></p></div> <?php } ?>
                                </div>
                    <?php
                    else:?>
                        <div class="d-flex flex-column col-sm-12 col-md-5 p-2 bg-white border rounded mt-2">
                            <div class="d-flex flex-row">
                                <div class="col-md-9 mt-1 mx-2 ps-3">
                                    <h5><?php echo $service->title;?></h5>
                                    <p class="text-justify para mb-0"><?php echo $service->excerpt;?><br><br>
                                    <!--<a href='/clarkson/request-a-quote/'
            class='readon large'>Request a quote</a>-->
                                    </p>
                                </div>
                                <div class="col-md-3 mt-1 pe-2"><img class="img-fluid img-responsive rounded product-image" src="<?php echo $service->image->url;?>"></div>
                                            <?php
                                            if(!empty($service->cover_types)){
                                                $dom = new \DOMDocument();
                                                $dom->loadHTML($service->cover_types);

                                                $liElements = $dom->getElementsByTagName('li');

                                                $extractedListItems = [];

                                                foreach ($liElements as $li) {
                                                    $extractedListItems[] = '&nbsp;'.$li->textContent.'&nbsp;';
                                                }


                                            ?>

                                                
                                            <?php } ?>
                            </div>
                            <?php if(!empty($service->cover_types)){?><div class="col-sm-12"><p class="p-0"><strong><?php echo $service->title;?> products</strong></p><p class="text-justify para mb-0"><?php echo implode(' &starf; ',$extractedListItems)?></p></div>  <?php } ?>
                        </div>
                    <?php

                    endif;
                
                $i++;    
            }

        }
?>
            
            
        
    </div>       
    
            <div class="row d-flex flex-row mt-5">
            <?php 
                        $files = $page->files_repeater;

                        if ($files) {
                            foreach ($files as $file) {
                                echo '<span><a class="readon border black" href="' . $file->url . '" target="_blank">' . $file->description . '</a></span>';
                            }

                        }
                        ?>

            </div>

            <div class="row">
                
                
                <?php if(!empty($page->body_lists)):?>
                    <div class="blood-test-area">
		<div class="container">
			<div id="content d-flex">
				<?php
				$tab_links = [];
				$tab_content = [];
				$i = 1;
				foreach ($page->body_lists as $tab) {
					//$link = ($tab->button_link) ? "<a class='readon large border'  href='{$tab->button_link->url}'>{$tab->button_label}</a>" : '';


					$class = ($i == 1) ? 'active' : '';
					$tab_links[] = '<li><a class="' . $class . '" href="#tab' . $i . '" data-bs-toggle="tab"><i class="' . $tab->icon_picker . '"></i>' . $tab->body_item_title . '</a></li>';
					
                    $tab_cards = '';
                    foreach($tab->body_items as $card){
                        $title = (!empty($card->body_item))? '<span class="card-title p-3">'.$card->body_item.'</span>':'';
                        $tab_cards .= '<div class="card custom-card border-top shadow flex-grow-1 mx-2">
                        <div class="card-body">
                          '.$title.'
                          <p class="card-text m-0 text-left">'.$card->body_item_description.'</p>
                        </div>
                      </div>';
                    }
                    $tab_content[] = '<div class="tab-pane ' . $class . '" id="tab' . $i . '">
					<div class="row">
						
						<div class="col-12 col-md-12 col-lg-12">
							<div class="blood-text about-intensy-text services-text">
								<h2 class="mb-4">' . $tab->body_item_title . '</h2>
								<div class="d-flex flex-row">
                                    '.$tab_cards.'
                                </div>
							</div>
						</div>
					</div>
				</div>
				';
					$i++;
				}
				?>
				<ul id="tabs" class="blood-tab nav" data-bs-tabs="tabs">
					<?php foreach ($tab_links as $link) {
						echo $link;
					} ?>
				</ul>
				<div id="my-tab-content" class="tab-content">
					<?php foreach ($tab_content as $body) {
						echo $body;
					} ?>
				</div>
			</div>
		</div>
	</div>
	
                <?php endif;?>
            </div>

        </div>
    </div>

    <?php if(!empty($page->country_cta)):?>
        <?php foreach($page->country_cta as $cta):?>
    <div class="order-area3">
            <div class="container">
                <div class="order-box">
                    <div class="row">
                        <div class="col-12 col-md-9 col-lg-9">
                            <h3 class="text-white"><?php echo $cta->title?></h3>
                            <p><?php echo $cta->excerpt?></p>
                        </div>
                        <div class="col-12 col-md-3 col-lg-3">
                            <a href="<?php echo $cta->button_link->url?>"><?php echo $cta->button_label?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<?php endforeach; endif;?>


    <!-- Start footer -->
    <?php include('./_footer.php'); // include footer markup 
    ?>
    <!-- End footer -->

    <!-- JS -->

    <?php include('./_scripts.php'); ?>
</body>


</html>