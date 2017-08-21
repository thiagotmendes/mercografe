<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php title_page() ?></title>

    <?php wp_head() ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <header>
    <section class="barratop">
      <div class="container">
        <div class="pull-right">
          <span class="icontel"><i class="fa fa-phone" aria-hidden="true"></i></span> <span class="tel">(31) 3315-1000/25104019</span>
        </div>
      </div>
    </section>
    <nav class="navbar navbar-menu" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php logo_site() ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
          <?php
            $args = array(
              'theme_location' => 'menu_topo',
              'menu_class' => 'nav navbar-nav navbar-right menu-site',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'	 => new wp_bootstrap_navwalker()
            );
            wp_nav_menu( $args );
          ?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
