<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Francis Okoboi, KAINGroup">
	<?php echo $page->seo;?>

    <?php
    // Hreflang tags for multi-country SEO
    $currentCountry = $page->closest("template=country");
    $countryLangMap = [
        1179 => ['hreflang' => 'en-UG', 'region' => 'UG', 'name' => 'Uganda'],
        1039 => ['hreflang' => 'en-KE', 'region' => 'KE', 'name' => 'Kenya'],
    ];

    // Get all country pages for hreflang alternates
    $countries = $pages->find("template=country");
    foreach($countries as $c):
        if(isset($countryLangMap[$c->id])): ?>
    <link rel="alternate" hreflang="<?= $countryLangMap[$c->id]['hreflang'] ?>" href="<?= $c->httpUrl ?>" />
    <?php endif;
    endforeach; ?>
    <link rel="alternate" hreflang="x-default" href="<?= $pages->get('/')->httpUrl ?>" />

    <?php if($currentCountry->id && isset($countryLangMap[$currentCountry->id])): ?>
    <meta name="geo.region" content="<?= $countryLangMap[$currentCountry->id]['region'] ?>" />
    <meta name="geo.placename" content="<?= $countryLangMap[$currentCountry->id]['name'] ?>" />
    <?php endif; ?>



    <!-- Favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $urls->templates?>img/favicon.ico">

    <!-- Fonts  -->

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

    <link href="<?php echo $urls->templates?>fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo $urls->templates?>fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?php echo $urls->templates?>fontawesome/css/solid.css" rel="stylesheet">

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
        body.home-4 .order-area3 {
            background: rgba(0, 0, 0, 0) url("<?php echo $urls->templates?>img/home4/calltoaction2.jpg") repeat scroll 0 0;
            padding: 80px 0;
        }
        /* Testimonials styling */
        body.home-4 .testimonial-area4 {
            background: #f8f9fa;
            padding: 80px 0;
        }
        body.home-4 .testimonial-area4 .recent-post4-title h1 {
            color: #333;
        }
        body.home-4 .testimonial-area4 .recent-post4-title p {
            color: #666;
        }
        body.home-4 .testimonial-area4 .single-testimonial {
            margin-bottom: 30px;
        }
        body.home-4 .testimonial-area4 .testimonial-box {
            background: #fff;
            border-bottom: 4px solid #c8102e;
            padding: 25px;
            margin-bottom: 15px;
            position: relative;
            border-radius: 5px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
            min-height: 180px;
        }
        body.home-4 .testimonial-area4 .testimonial-box p {
            color: #555;
            font-style: italic;
            line-height: 1.7;
            font-size: 14px;
        }
        body.home-4 .testimonial-area4 .testimonial-box img {
            border-radius: 50%;
            margin-right: 15px;
            border: 3px solid #c8102e;
            float: left;
            width: 70px;
            height: 70px;
            object-fit: cover;
        }
        body.home-4 .testimonial-area4 .testimonial-box::after {
            content: "";
            display: table;
            clear: both;
        }
        body.home-4 .testimonial-area4 .testimonial-box .quote {
            position: absolute;
            top: -12px;
            right: 20px;
            background: #c8102e;
            color: #fff;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }
        body.home-4 .testimonial-area4 .testimonial-details h5 {
            color: #333;
            margin-top: 10px;
            font-weight: 600;
        }
        body.home-4 .testimonial-area4 .testimonial-details p {
            color: #888;
            font-size: 13px;
        }
        /* Testimonials carousel */
        body.home-4 .testimonials-carousel .single-testimonial {
            padding: 0 15px;
        }
        body.home-4 .testimonials-carousel .owl-controls {
            margin-top: 30px;
            text-align: center;
        }
        body.home-4 .testimonials-carousel .owl-pagination .owl-page span {
            background: #ccc;
        }
        body.home-4 .testimonials-carousel .owl-pagination .owl-page.active span {
            background: #c8102e;
        }
        body.home-4 .testimonials-carousel .owl-buttons div {
            background: #c8102e;
            color: #fff;
            padding: 8px 12px;
            border-radius: 3px;
            margin: 0 5px;
        }
        body.home-4 .testimonials-carousel .owl-buttons div:hover {
            background: #a00d25;
        }
    </style>
</head>
