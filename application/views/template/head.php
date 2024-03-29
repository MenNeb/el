<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard One | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>application/views/assets/img/favicon.ico">
    <!-- Google Fonts
    ============================================ -->
    <link href="<?php echo base_url();?>application/views/assets/https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/owl.transitions.css">
    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/normalize.css">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/notika-custom-icon.css">
    <!-- wave CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/wave/waves.min.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/main.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body >
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url();?>application/views/assets/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="<?php echo base_url();?>application/views/assets/#"><img src="<?php echo base_url();?>application/views/assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                             <li class="nav-item dropdown">
                                <a href="<?php echo base_url();?>application/views/assets/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menu"> </i></span></a>
                                <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                    
                                 
                                    <div class="hd-mg-tt">
                                         <a href="<?php echo site_url('User/logout')?>" ><h2>Logout </h2></a>
                                    </div>
                                    
                                      
                                     
                                
                                    
                                </div>
                            </li>
                           
                         
                           
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
   
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
  <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs  notika-menu-wrap menu-it-icon-pro ">
                        <li class="active"><a data-toggle="tab" href="#Acceuil"><i class="notika-icon notika-house"></i> Acceuil</a>
                        </li>
                       
                         
                        <li><a data-toggle="tab" href="#Sessions"><i class="notika-icon notika-windows"></i> Sessions</a>
                        </li>
                        <li><a data-toggle="tab" href="#Parcours"><i class="notika-icon notika-form"></i> Parcours</a>
                        </li>
                         <li><a data-toggle="tab" href="#Statistique"><i class="notika-icon notika-bar-chart"></i> Statistiques</a>
                        </li>
                        <li><a data-toggle="tab" href="#Fichier"><i class="notika-icon notika-app"></i> Mon profile </a>
                        </li>  
                    </ul>
                 
                     <?php $id =$this->session->userdata('id');?>
                 
                    <div class="tab-content custom-menu-content">
                        <div id="Acceuil" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?php echo site_url('User/dashboard')?>">Acceuil</a>
                                </li>
                                
                            </ul>
                        
                        </div>
                     
                       
                        <div id="Sessions" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?php echo site_url('Parcours/getSessionbyID/'.$id)?>">Mes Sessions</a>
                                </li>
                               
                            </ul>
                        </div>
                        <div id="Parcours" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?php echo site_url('Parcours/getbyID/'.$id)?>">Mes parcours</a>
                                </li>
                                
                                
                            </ul>
                        </div>
                        <div id="Fichier" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?php echo site_url('User/details/'.$id)?>">Cosulter Mes détails </a>
                                </li>
                                <li><a href="<?php echo site_url('User/uppassword/'.$id)?>">Modifier mot de passe </a>
                                </li>
                                <li><a href="<?php echo site_url('User/updetails/'.$id)?>">Modifier Mes information </a>
                                </li>
                            </ul>
                        </div>
                        <div id="Statistique" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?php echo site_url('Parcours/getstats/'.$id)?>">Mest Statistiques </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  