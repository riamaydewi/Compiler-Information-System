<!DOCTYPE html>



<html lang="en" xmlns="http://www.w3.org/1999/html">

<!-- Mirrored from fickle.aimmate.com/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2015 13:05:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Viewport metatags -->
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- iOS webapp metatags -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- iOS webapp icons -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo site_url ('assets/images/ios/fickle-logo-72.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo site_url ('assets/images/ios/fickle-logo-72.png')?>" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo site_url ('assets/images/ios/fickle-logo-114.png')?>" />

    <!-- TODO: Add a favicon -->
    <link rel="shortcut icon" href="<?php echo site_url ('assets/images/ico/fab3860.ico?v=1')?>">

    <title>1st Compiler</title>

    <!--Page loading plugin Start -->
    <script type="text/javascript" src="<?php echo site_url() ?>assets/js/lib/jquery-1.11.min.js"></script>
    <link rel="stylesheet" href="<?php echo site_url ('assets/css/plugins/pace.css')?>">
    <script src="<?php echo site_url ('assets/js/pace.min.js')?>"></script>



    <!--Page loading plugin End   -->

    <!-- Plugin Css Put Here -->
    <link href="<?php echo site_url ('assets/css/bootstrap.min.css" rel="stylesheet')?>">

    <!-- Plugin Css End -->
    <!-- Custom styles Style -->
    <link href="<?php echo site_url ('assets/css/style.css" rel="stylesheet')?>">
    <!-- Custom styles Style End-->

    <!-- Responsive Style For-->
    <link href="<?php echo site_url ('assets/css/responsive.css" rel="stylesheet')?>">
    <!-- Responsive Style For-->

    <!-- Custom styles for this template -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="">
<!--Navigation Top Bar Start-->
<nav class="navigation">
<div class="container-fluid">
<!--Logo text start-->
<div class="header-logo">
    <a href="<?php echo base_url('awal')?>" title="">
        <h1>Compiler</h1>
    </a>
</div>
<!--Logo text End-->
<div class="top-navigation">
<!--Collapse navigation menu icon start -->
<div class="menu-control hidden-xs">
    <a href="<?php echo base_url('awal')?>">
        <i class="glyphicon glyphicon-home"></i>
    </a>

</div>

<!--Collapse navigation menu icon end -->
<!--Top Navigation Start-->

<ul>
    <li>
        <a href="<?php echo base_url('about')?>"> About
            <i class="glyphicon glyphicon-question-sign"></i>
        </a>
    </li>

     <li class="dropdown">
        <!--Notification drop down start-->
        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"> Panitia
             <span class="fa fa-user"></span>
         
        </a>

        <div class="dropdown-menu right top-notification">
            <h4>Room Panitia</h4>
            <ul class="ls-feed">
                <li>
                    <a href="<?php echo base_url('daftar_panitia')?>">
                                        
                            Daftar Panitia
                        
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('login')?>">
                                        
                        Login
                        
                    </a>
                </li>
                        
            </ul>
        </div>
        <!--Notification drop down end-->
    </li>

     <li class="dropdown">
        <!--Notification drop down start-->
        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"> Umum
             <span class="fa fa-tasks"></span>
           
        </a>

        <div class="dropdown-menu right top-notification">
            <h4>Room Umum</h4>
            <ul class="ls-feed">
                <li>
                    <a href="<?php echo base_url('gallery')?>">
                                       
                       Gallery
                        
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('contact')?>">
                                        
                        Contact Person
                        
                    </a>
                </li>
               
            </ul>
        </div>
        <!--Notification drop down end-->
    </li>
     <li class="dropdown">
        <!--Notification drop down start-->
        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"> Jadwal Pertandingan
             <span class="glyphicon glyphicon-time"></span>
            
        </a>

        <div class="dropdown-menu right top-notification">
            <h4>Room Pertandaingan</h4>
            <ul class="ls-feed">
                <li>
                    <a href="<?php echo base_url('pertandingan/futsal')?>">
                                        
                        Futsal
                      
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('pertandingan/basket')?>">
                                        
                        Basket
                        
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('pertandingan/badminton')?>">
                                        
                        Badminton
                       
                    </a>
                </li>
                <li>
                
            </ul>
        </div>
        <!--Notification drop down end-->
    </li>
    
   
   </ul>
<!--Top Navigation End-->
</div>
</div>
</nav>
<!--Navigation Top Bar End-->

<section id="main-container">
