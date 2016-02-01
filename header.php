
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- voor internet explorer -->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- voor mobiel responsief -->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Bereken uw Return on Investment">
    <meta name="author" content="Reza Fitriaman">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon/icon.png">

    <title>Omgekeerde ROI</title>

    <!-- Bootstrap core CSS --> <!-- Custom styles -->
    <?php wp_head(); ?><!-- <link href="css/bootstrap.css" rel="stylesheet"> --><!--<link href="css/main.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><!-- <link href="css/font-awesome.css" rel="stylesheet"> -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  </head>

  <body>

    <!-- Navigatie bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"><!-- Bootstrap navigation bar -->           
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar"><!-- collapsed als de scherm kleiner wordt --> 
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#home" class="navbar-brand">
          <img alt="" class="img-responsive width-navbar-brand" src="http://www.rezafitriaman.nl/wp-content/uploads/2016/01/Logo.png">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden">
            <a href="#home" class="hidden-xs">Home</a>
            <a href="#home" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse">Home</a>
          </li>
          <li class="page-scroll">
            <a href="#roi-tools" class="hidden-xs">ROI Tools</a>
            <a href="#roi-tools" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse">ROI Tools</a>
          </li>
          <li class="page-scroll">
            <a href="#schelte-meinsma" class="hidden-xs">Schelte Meinsma</a>
            <a href="#schelte-meinsma" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse">Schelte Meinsma</a>
          </li>
          <li class="page-scroll">
            <a href="#vragen" class="hidden-xs">Vragen</a>
            <a href="#vragen" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse" >Vragen</a>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
    </nav><!-- End Navigatie bar -->