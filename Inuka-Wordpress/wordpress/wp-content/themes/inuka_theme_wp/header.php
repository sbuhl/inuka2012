<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
<?php bloginfo('name') ?>
<?php if ( is_404() ) : ?>
&raquo;
<?php_e('Not Found' )?>
<?php elseif ( is_home() ) : ?>
&raquo;
<?php bloginfo('description') ?>
<?php else : ?>
<?php wp_title() ?>
<?php endif ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<!-- Favicon -->
<link rel="icon" type="image/png" href="<?php bloginfo('template_url');?>/images/favicon.png" />

<!-- Cascading Style Sheets -->

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/style.css"/>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/jsq/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<!-- Javascript -->

<script type="text/javascript" src="<?php bloginfo('template_url');?>/jsq/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/jsq/jquery.diaporama.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/jsq/script.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/jsq/SpryAccordion.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/jsq/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/jsq/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<?php wp_head(); ?>
</head>
<body>
<div id="page" class="hfeed">
<header>
  <h1><a href="<?php bloginfo('url'); ?>">
    <?php bloginfo('name'); ?>
    </a></h1>
  <p>
    <?php bloginfo('description');?>
  </p>
  <ul class="diaporama">
    <li><img src="<?php bloginfo('template_url');?>/images/galerie/galerie_1.jpg" alt="Image 1" width="964" height="300" /></li>
    <li><img src="<?php bloginfo('template_url');?>/images/galerie/galerie_2.jpg" alt="Image 2" width="964" height="300"/></li>
    <li><img src="<?php bloginfo('template_url');?>/images/galerie/galerie_3.jpg" alt="Image 2" width="964" height="300"/></li>
    <li><img src="<?php bloginfo('template_url');?>/images/galerie/galerie_4.jpg" alt="Image 2" width="964" height="300"/></li>
    <li><img src="<?php bloginfo('template_url');?>/images/galerie/galerie_5.jpg" alt="Image 2" width="964" height="300"/></li>
    <li><img src="<?php bloginfo('template_url');?>/images/galerie/galerie_6.jpg" alt="Image 2" width="964" height="300"/></li>
    <li><img src="<?php bloginfo('template_url');?>/images/galerie/galerie_7.jpg" alt="Image 2" width="964" height="300"/></li>
    <li><img src="<?php bloginfo('template_url');?>/images/galerie/galerie_8.jpg" alt="Image 2" width="964" height="300"/></li>
  </ul>
  <div id="logo"><a href="<?php echo get_option('home'); ?>"></a></div>
  <div id="navbar">
    <ul id="nav">
      <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
    </ul>
  </div>
</header>
