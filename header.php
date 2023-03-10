<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>                
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="overlay"></div>
<div id="popup-content"></div>

<div id="page" class="site cf">
	<a class="skip-link sr" href="#content"><?php esc_html_e( 'Skip to content', 'bellaworks' ); ?></a>	
  <header id="masthead" class="site-header floral-pattern" role="banner">
		<div class="wrapper head-flex">
			
        <div id="site-logo" class="logo">
          <a href="<?php bloginfo('url'); ?>">
           <img src="<?php bloginfo('template_url'); ?>/images/logo.svg">
          </a>
        </div>
  			<nav id="site-navigation" class="main-navigation desktop-navigation full-width-dropdown" role="navigation">
  				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class'=>'primary-menu-wrap' ) ); ?>
  			</nav><!-- #site-navigation -->
			<div class="right-head">&nbsp;</div>
		</div><!-- wrapper -->
	</header><!-- #masthead -->

  <span id="mobile-menu-toggle"><span class="bar"><span></span></span></span>
  <div class="mobile-navigation floral-pattern"></div>

	<?php get_template_part('parts/pagetitle');?>
	<?php 
  $CS = get_field('coming_soon'); 
  if( $CS[0] == '' ) {
    get_template_part('parts/banner');
  } 
  ?>

	<div id="content" class="site-content">
