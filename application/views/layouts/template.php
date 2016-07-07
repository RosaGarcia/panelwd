<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Warriors">

    <meta http-equiv=”X-UA-Compatible” content=”IE=EmulateIE9”>
    <meta http-equiv=”X-UA-Compatible” content=”IE=9”>

    <link rel="shortcut icon" href="<?php echo base_url()?>public/images/favicon.ico">
    <title>Warriors</title>
    <!--Core CSS -->
    <link href="<?php echo base_url()?>public/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/js/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/clndr.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/main.css" rel="stylesheet">
    <!--clock css-->
    <link href="<?php echo base_url()?>public/js/css3clock/css/style.css" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/js/morris-chart/morris.css">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>public/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/style-responsive.css" rel="stylesheet"/>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
        <img src="<?php echo base_url()?>public/images/warriors.png" width="185px" alt="">
    </a>
    <!--<div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>-->
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/avatar1_small.jpg">
                <span class="username">Warriors</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">                
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <!--<li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li>-->
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->

<!--main content start-->
<section id="main-content" class="merge-left">
<section class="wrapper">

<?php echo $content_for_layout; ?>

</section>
</section>
<!--main content end-->

</section>
<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="<?php echo base_url()?>public/js/funciones.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>public/js/jquery.js"></script>
<script src="<?php echo base_url()?>public/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="<?php echo base_url()?>public/bs3/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>public/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url()?>public/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url()?>public/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo base_url()?>public/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url()?>public/js/skycons/skycons.js"></script>
<script src="<?php echo base_url()?>public/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="<?php echo base_url()?>cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo base_url()?>public/js/calendar/clndr.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src="<?php echo base_url()?>public/js/calendar/moment-2.2.1.js"></script>
<script src="<?php echo base_url()?>public/js/evnt.calendar.init.js"></script>
<script src="<?php echo base_url()?>public/js/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>public/js/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
<script src="<?php echo base_url()?>public/js/gauge/gauge.js"></script>
<!--clock init-->
<script src="<?php echo base_url()?>public/js/css3clock/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<script src="<?php echo base_url()?>public/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="<?php echo base_url()?>public/js/sparkline/jquery.sparkline.js"></script>
<!--Morris Chart-->
<script src="<?php echo base_url()?>public/js/morris-chart/morris.js"></script>
<script src="<?php echo base_url()?>public/js/morris-chart/raphael-min.js"></script>
<!--jQuery Flot Chart-->
<script src="<?php echo base_url()?>public/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo base_url()?>public/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url()?>public/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo base_url()?>public/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="<?php echo base_url()?>public/js/flot-chart/jquery.flot.animator.min.js"></script>
<script src="<?php echo base_url()?>public/js/flot-chart/jquery.flot.growraf.js"></script>
<script src="<?php echo base_url()?>public/js/dashboard.js"></script>
<script src="<?php echo base_url()?>public/js/jquery.customSelect.min.js" ></script>
<!--common script init for all pages-->
<script src="<?php echo base_url()?>public/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>



<!--script for this page-->
</body>
</html>