<?php
    $id_user = $this->session->userdata('id_user');
    $cek_dashboard = $this->M_dashboard->cek_dashboard($id_user);
        
    $halaman= $cek_dashboard->row()->nama_role;
?>

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



    <!--Page loading plugin Start -->
    <script type="text/javascript" src="<?php echo site_url() ?>assets/js/lib/jquery-1.11.min.js"></script>
    <link rel="stylesheet" href="<?php echo site_url ('assets/css/plugins/pace.css')?>">
    <script src="<?php echo site_url ('assets/js/pace.min.js')?>"></script>

    <title>Panitia | 1st Compiler</title>

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
    <a href="index-2.html" title="">
        <h1><?php echo $halaman ?></h1>
    </a>
</div>
<!--Logo text End-->
<div class="top-navigation">
<!--Collapse navigation menu icon start -->
<div class="menu-control hidden-xs">
    <a href="javascript:void(0)">
        <i class="fa fa-bars"></i>
    </a>

</div>
<!--Collapse navigation menu icon end -->

<ul>
    <li>
        <a href="<?php echo site_url('login/proses_logout')?>">
            <i class="glyphicon glyphicon-log-out"></i>
        </a>
    </li>

</ul>
<!--Top Navigation End-->
</div>
</div>
</nav>
<!--Navigation Top Bar End-->

<section id="main-container">
