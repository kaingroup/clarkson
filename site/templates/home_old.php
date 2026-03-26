<?php namespace ProcessWire;?>

<!doctype html>
<html lang="en">
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Francis Okoboi, KAINGroup">
  <?php echo $page->seo;?>

  <!--<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">-->



  <!-- Bootstrap core CSS -->
  <link href="<?php echo $urls->templates?>assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $urls->templates?>assets/libs/font-awesome-4.7.0/css/font-awesome.min.css">
  <link href="<?php echo $urls->templates?>assets/css/main.css" rel="stylesheet">

  

  <!-- Custom styles for this template -->
  <link href="<?php echo $urls->templates?>carousel.css" rel="stylesheet">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid d-flex flex-row justify-content-center">
        <a class="navbar-brand" href="#"><img class="img-fluid logo" src="<?php echo $urls->templates?>images/logo_trans_xs.fw.png" alt="Clarkson Insurance Brokers logo" srcset=""></a>
      </div>
    </nav>
  </header>

  <main style="margin-top: 93px">

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <!--
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      -->
      <div class="carousel-inner">
		<?php 
			foreach($page->home_page_slider as $slide){
				echo $slide->render();
			}
		?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing mb-5">

      <div class="featurette grid">
        <div class="tall d-flex flex-column justify-content-center">
			<?php foreach($page->home_left as $item):?>
				<h2 class="lead mt-5"><?php echo $item->title;?></h2>
				<p class="lead"><?php echo $item->excerpt;?></p>
				<button type="button"
                    class="primary-btn btn btn-outline-dark rounded-0 border-dark mt-5 text-dark"><?php echo $item->button_label;?> <i
                      class="fa fa-angle-double-right" aria-hidden="true"></i></button>
			<?php endforeach;?>
        </div>


        <?php 
			foreach($page->home_countries as $country){
				echo $country->render();
			}
		?>


      </div>

    </div><!-- /.container -->


  </main>


  <script src="<?php echo $urls->templates?>assets/libs/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
	
