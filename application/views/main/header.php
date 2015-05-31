<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8" />
    <title>Main</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
 
   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="<?=URL::Base()?>static1/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?=URL::Base()?>static1/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href="<?=URL::Base()?>static1/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />              
   <link rel="stylesheet" href="<?=URL::Base()?>static1/plugins/revolution_slider/css/rs-style.css" media="screen">
   <link rel="stylesheet" href="<?=URL::Base()?>static1/plugins/revolution_slider/rs-plugin/css/settings.css" media="screen"> 
   <link href="<?=URL::Base()?>static1/plugins/bxslider/jquery.bxslider.css" rel="stylesheet" />                
   <!-- END PAGE LEVEL PLUGIN STYLES -->
 
   <!-- BEGIN THEME STYLES --> 
   <link href="<?=URL::Base()?>static1/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="<?=URL::Base()?>static1/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="<?=URL::Base()?>static1/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?=URL::Base()?>static1/css/themes/blue.css" rel="stylesheet" type="text/css" id="style_color"/>
   <!-- END THEME STYLES -->
 
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<body class="page-header-fixed">

    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<button class="navbar-toggle btn navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- END RESPONSIVE MENU TOGGLER -->
				<!-- BEGIN LOGO (you can use logo image instead of text)-->
				<a class="navbar-brand logo-v1" href="index.html">
					<img src="<?=URL::Base()?>static1/img/logo_blue.png" id="logoimg" alt="">
				</a>
				<!-- END LOGO -->
			</div>
		
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown active">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="index">
                        	Home
                        	<i class="fa fa-angle-down"></i>
                        </a>
 
					</li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-delay="0" data-close-others="false" data-target="#" href="#">
                        Nossa Empresa
                        <i class="fa fa-angle-down"></i>
                      </a>
                     
 
                    <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                            Sobre-nós
                            <i class="fa fa-angle-down"></i>
                        </a>

                    </li>
					<li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                        	Conheça-nos
                        	<i class="fa fa-angle-down"></i>
                        </a>
					</li>                        
					<li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                        	Contate-nos
                        	<i class="fa fa-angle-down"></i>
                        </a>
                    
					</li>
					<li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="<?php echo URL::site('user/login') ?>">
                        	Login
                        	<i class="fa fa-angle-down"></i>
                        </a>
					</li>
				</ul>                           
			</div>
			<!-- BEGIN TOP NAVIGATION MENU -->
		</div>
    </div>
    <!-- END HEADER -->