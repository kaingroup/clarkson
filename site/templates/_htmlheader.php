<?php
$template = $page->template();
if($template != 'country') $toppage = $page->parent("template=country"); 
else $toppage = $page;

$toppage->country_hotline = ($toppage->country_hotline)? $toppage->country_hotline:'+256 414 235499/312 202210';
$toppage->country_opening_hours = ($toppage->country_opening_hours)? $toppage->country_opening_hours:'08:00AM-10:00PM';
$toppage->country_email = ($toppage->country_email)? $toppage->country_email:'infoug@clarkson-group.com';
?>

<header class="home5-sticky bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-5 col-md-3 col-lg-4">
					<div class="logo">
						<a href="<?php echo $config->urls->httpRoot;?>"><img src="<?php echo $urls->templates?>img/logo_trans_xs.fw.png" alt=""></a>
					</div>
				</div>
				<div class="col-7 col-md-8 col-lg-7 d-none d-md-block">
					<div class="call-to-acction">
						<div class="call-to">
							<h3><i class="fa fa-phone"></i>HOTLINE NUMBER</h3>
							<a href="tel:<?php echo $toppage->country_hotline; ?>">
								<?php echo $toppage->country_hotline; ?>
							</a>
						</div>
						<div class="call-to">
							<h3><i class="fa fa-clock-o"></i>OPENING HOURS</h3>
							<span>
								<?php echo $toppage->country_opening_hours; ?>
							</span>
						</div>
						<div class="call-to send-mail">
							<h3><i class="fa fa-envelope-o"></i>Email Us</h3>
							<span><a href="mailto:<?php echo $toppage->country_email; ?>">
									<?php echo $toppage->country_email; ?>
								</a></span>
						</div>
					</div>
				</div>
				<div class="col-7 col-md-1 col-lg-1">
					<div class="side-menu-icon">
						<ul>
							<li class="sb-open-left"><a id="right-menu" href="#right-menu"><i
										class="fa fa-bars"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	