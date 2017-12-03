<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

<!-- Bower Package -->
<!-- ... -->
  <script type="text/javascript" src="<?=base_url()?>bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>bower_components/moment/min/moment.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <link rel="stylesheet" href="<?=base_url()?>bower_components/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
    <!-- Bootstrap core CSS 

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/simple-sidebar.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/custom-admin.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="<?=base_url()?>admin/slider">Slider</a>
                </li>
                <li>
                    <a href="<?=base_url()?>admin/artikel">Artikel</a>
                </li>
                <li>
                    <a href="<?=base_url()?>admin/mod_booking">Moderasi</a>
                </li>
                <li>
                    <a href="<?=base_url()?>admin/inbox">Inbox</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->