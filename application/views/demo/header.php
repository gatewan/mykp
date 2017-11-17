<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <title>Sticky Footer Navbar Template for Bootstrap</title>

<!-- Bower Package -->
<!-- ... -->
  <script type="text/javascript" src="<?=base_url()?>bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>bower_components/moment/min/moment.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <link rel="stylesheet" href="<?=base_url()?>bower_components/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
    <!-- Bootstrap core CSS 

	<!-- Custon OWN CSS -->
	<link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/full-slider.css" rel="stylesheet">
	
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
  <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>demo/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>demo/paket">Paket</a>
            </li>
			 <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>demo/booking">Booking</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>demo/agenda">Agenda</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>demo/galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>demo/contact">Contact</a>
            </li>
<!--DISABLE
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>

      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    </header>