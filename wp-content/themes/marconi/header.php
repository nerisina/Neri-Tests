<!DOCTYPE html>
<html>
<body>
  <head>
    <meta charset="utf-8">
    <title>Marconi Yound Schoolars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

  <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFHQvpRdIYDUbOWdmwYtgihRYSYYSW0W0"></script>-->

  </head>

  <header>

    <div class="m-logo-img">
      <a href="<?php echo site_url(); ?>">
        <img src="<?php bloginfo("template_url"); ?>/bootstrap/img/logo.jpg" alt="Marconi Young Scholars" class="m-logo pull-left" />
      </a>
    </div>
   
   <!--  <nav class="mc-nav-p navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
       <!--  <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo site_url(); ?>" class="m-title pull-right <?php if(is_single()){?>mc-header-single-post<?php } ?>"><?php bloginfo('name'); ?></a> 
        </div>
 -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>  
        </div><!-- /.navbar-collapse -->
      <!--</div><!-- /.container-fluid -->
    <!-- </nav>  --> 

    <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand m-title " href="<?php echo site_url(); ?>" class="m-title pull-right <?php if(is_single()){?>mc-header-single-post<?php } ?>"><?php bloginfo('name'); ?></a> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?> 
    </ul>
     
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
  </header>
