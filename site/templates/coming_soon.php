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

<?php include('./_header.php'); // include footer markup ?>

<body class="home-4">
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
		<?php include('./_sidemenu.php'); // include footer markup ?>
	</div>
	<!-- Start main menu -->
	<?php include('./_mainmenu.php'); // include footer markup ?>
	<!-- End main menu -->
	<!-- Start slider -->
	<div class="slider">
		<!-- Start Slider -->
		<div id="slider">
			<div class="tp-banner-container">
				<div class="fullwidthbanner-4">
					<ul>
						<?php
						foreach ($page->country_slider as $slide) {
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
	<!-- Start emergensy area -->
	<div class="emergensy-area">
		<div class="container">
			<div class="row">
				<?php
				$i = 1;
				foreach ($page->country_quick_links as $block) {
					$add = '';
					if ($i == 2)
						$add = ' em-two';
					if ($i == 3)
						$add = ' em-three';
					?>
					<div class="col-12 col-md-4 col-lg-4">
						<div class="emargency-one<?php echo $add; ?>">
							<div class="emargency-box">
								<span>
									<?php echo $block->subtitle; ?>
								</span>
								<h3>
									<?php echo $block->title; ?>
								</h3>
								<p>
									<?php echo $block->excerpt; ?>
								</p>
								<?php if (!empty($block->button_link)): ?>
									<a href="<?php echo $block->button_link->url; ?>"><?php echo $block->button_label; ?> <i
											class="fa fa-long-arrow-right"></i></a>
								<?php endif ?>
							</div>
							<i class="su-panel-icon li li-share"></i>
						</div>
					</div>

					<?php
					$i++;
				}
				?>

			</div>
		</div>
	</div>
	<!-- End emergensy area -->
	<!-- Start blood test area -->
	<div class="blood-test-area">
		<div class="container">
			<div id="content">
				<?php
				$tab_links = [];
				$tab_content = [];
				$i = 1;
				foreach ($page->country_tabs as $tab) {
					$link = ($tab->button_link) ? "<a class='readon large border'  href='{$tab->button_link->url}'>{$tab->button_label}</a>" : '';


					$class = ($i == 1) ? 'active' : '';
					$tab_links[] = '<li><a class="' . $class . '" href="#tab' . $i . '" data-bs-toggle="tab"><i class="' . $tab->icon_picker . '"></i>' . $tab->tab_title . '</a></li>';
					$tab_content[] = '<div class="tab-pane ' . $class . '" id="tab' . $i . '">
					<div class="row">
						<div class="col-12 col-md-12 col-lg-6">
							<div class="blood-image">
								<img src="' . $tab->image->url . '" alt="' . $tab->tab_title . '">
							</div>
						</div>
						<div class="col-12 col-md-12 col-lg-6">
							<div class="blood-text">
								<h2>' . $tab->title . '</h2>
								<h3>' . $tab->subtitle . '</h3>
								<p>' . $tab->excerpt . '</p>

								' . $link . '
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
	<!-- End blood test area -->
<?php if($page->id == 1179):?>
	<!-- Start demandable area -->
    <div class="demandable-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h1>REGIONAL AND INTERNATIONAL PARTNERSHIPS</h1>
                        <p>Clarkson Insurance Brokers Uganda has stong partnerships with regional and interntational broking houses.This gives us an opportunity to tap into a wide range of technical skills and expertise. We bring all these to the benefit of our valued customers. </p>
                    </div>
                </div>
                <div class="demane-slide">
                    <!-- Start demand box -->
                    <div class="demand-box">
                        <div class="demand-image">
                            <img src="<?php echo $urls->templates?>images/aabn.png" alt="">
                            <div class="image-link">
                                <a class="search fancybox" href="<?php echo $urls->templates?>images/aabn.png" data-fancybox-group="gallery"><i class="fa fa-search"></i></a>
                                <a class="link" href="https://alliedafricabrokers.com/index.php"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="demand-text">
                            <a href="https://alliedafricabrokers.com/index.php">Allied Africa Broker Network (AABN) </a>
                            <p>AABN has a wide experience in handling large and complex regional and international insurance risks. Allied Africa Broker Network comprises of a carefully selected group of reputable independent insurance brokers in several African countries. This boosts our capacity as a firm to handle risks / projects of high magnitude due to the shared experience across the region.</p>

                        </div>
                    </div>
                    <!-- End demand box -->
                    <!-- Start demand box -->
                    <div class="demand-box">
                        <div class="demand-image">
                            <img src="<?php echo $urls->templates?>images/priceforbes.png" alt="">
                            <div class="image-link diman2">
                                <a class="search fancybox" href="<?php echo $urls->templates?>images/priceforbes.png" data-fancybox-group="gallery"><i class="fa fa-search"></i></a>
                                <a class="link" href="https://www.priceforbes.com/about-us"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="demand-text">
                            <a href="https://www.priceforbes.com/about-us">Price Forbes Partnership</a>
                            <p>Price Forbes is a UK based reputable International broker with wide experience in various sectors including Oil and Gas, Aviation and specialized risks including Cyber etc. Price Forbes is part of the World Wide Broker Network. This has strengthened Clarkson’s global reach and network.<br/><br/> </p>
                        </div>
                    </div>
                    <!-- End demand box -->
                    
                </div>
            </div>
        </div>
<!-- End demandable area -->
<?php endif?>

	<!-- Start order area3 -->
	<div class="order-area3">
		<div class="container">
			<div class="order-box ">
				<?php foreach ($page->country_cta as $cta): ?>
					<div class="row">
						<div class="col-12 col-md-9 col-lg-9">
							<h3>
								<?php echo $cta->title; ?>
							</h3>
							<p>
								<?php echo $cta->excerpt; ?>
							</p>
						</div>
						<div class="col-12 col-md-3 col-lg-3">
							<a href="<?php echo $cta->button_link->url; ?>"><?php echo $cta->button_label; ?></a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- End order area3 -->
	<!-- Start footer -->


	<?php include('./_footer.php'); // include footer markup ?>

	<!-- End footer -->

	<!-- JS -->
	<?php include('./_scripts.php'); // include footer markup ?>

</body>


</html>