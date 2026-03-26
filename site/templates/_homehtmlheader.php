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
				
				
			</div>
		</div>
	</header>
	