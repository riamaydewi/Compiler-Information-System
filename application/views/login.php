<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from fickle.aimmate.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2015 12:56:11 GMT -->
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
    <link rel="apple-touch-icon-precomposed" href="<?php echo site_url('assets/images/ios/fickle-logo-72.png') ?>" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo site_url('assets/images/ios/fickle-logo-72.png') ?>" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo site_url('assets/images/ios/fickle-logo-114.png') ?>" />

    <!-- TODO: Add a favicon -->
    <link rel="shortcut icon" href="assets/images/ico/fab.ico">

    <title>1st Compiler | Login</title>

    <!--Page loading plugin Start -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/plugins/pace.css">
    <script src="<?php echo base_url() ?>assets/js/pace.min.js"></script>
    <!--Page loading plugin End   -->

    <!-- Plugin Css Put Here -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/plugins/bootstrap-switch.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/plugins/ladda-themeless.min.css">

    <link href="<?php echo base_url() ?>assets/css/plugins/humane_themes/bigbox.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/plugins/humane_themes/libnotify.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/plugins/humane_themes/jackedup.css" rel="stylesheet">

    <!-- Plugin Css End -->
    <!-- Custom styles Style -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- Custom styles Style End-->

    <!-- Responsive Style For-->
    <link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet">
    <!-- Responsive Style For-->

    <!-- Custom styles for this template -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-screen">
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="login-box">
                    <div class="login-content">
                        <div class="login-user-icon">
                            <i class="glyphicon glyphicon-user"></i>

                        </div>
                        <h3>Login Panita</h3>
                    </div>

                    <div class="login-form">
                        <form  action="<?php echo site_url('login/proses_login')?>" method='POST' class="form-horizontal ls_form">
                            <div class="input-group ls-group-input">
                                <input class="form-control" type="text" placeholder="Username" name="username">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>


                            <div class="input-group ls-group-input">

                                <input type="password" placeholder="Password" name="password"
                                       class="form-control" value="">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            </div>

                            <div class="remember-me">
                                <input class="switchCheckBox" type="checkbox" checked data-size="mini"
                                       data-on-text="<i class='fa fa-check'><i>"
                                       data-off-text="<i class='fa fa-times'><i>">
                                <span>Remember me</span>
                            </div>
                            <div class="input-group ls-group-input login-btn-box">
								 <button type='submit' class="btn ls-dark-btn ladda-button col-md-12 col-sm-12 col-xs-12" data-style="slide-down">
                                    <span class="ladda-label"> login </span>
                                </button>

                                
                                <br/>
                                <a href="<?php echo base_url('awal')?>">
                                    <i class="glyphicon glyphicon-home"> Home</i>
                                </a>
                            </div>
                        </form>
                    </div>
                    <div class="forgot-pass-box">
                        <form action="#" class="form-horizontal ls_form">
                            <div class="input-group ls-group-input">
                                <input class="form-control" type="text" placeholder="someone@mail.com">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            </div>
                            <div class="input-group ls-group-input login-btn-box">
                                <button class="btn ls-dark-btn col-md-12 col-sm-12 col-xs-12">
                                    <i class="fa fa-rocket"></i> Send
                                </button>

                                <a class="login-view" href="javascript:void(0)">Login</a> & <a class="" href="registration.html">Registration</a>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

</body>
<script src="<?php echo base_url() ?>assets/js/lib/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/lib/jquery.easing.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap-switch.min.js"></script>
<!--Script for notification start-->
<script src="<?php echo base_url() ?>assets/js/loader/spin.js"></script>
<script src="<?php echo base_url() ?>assets/js/loader/ladda.js"></script>
<script src="<?php echo base_url() ?>assets/js/humane.min.js"></script>
<!--Script for notification end-->


<!-- Mirrored from fickle.aimmate.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2015 12:56:12 GMT -->
</html>