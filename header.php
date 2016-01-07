
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
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  </head>

  <body>

    <!-- Navigatie bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top"><!-- Bootstrap navigation bar -->						
      <div class="container">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><!-- collapsed als de scherm kleiner wordt -->	
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#home">Omgekeerde ROI</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="#roi-tools">ROI Tools</a></li>
            <li><a href="#schelte-meinsma">Schelte Meinsma</a></li>
			<li><a href="#vragen">Vragen</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>