<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wp_smithett
 */
?><!DOCTYPE html>

<!--[if lte IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if gt IE 8]><!-->
  <meta name="breakpoint" content="phone" media="(max-width: 568px)">
  <meta name="breakpoint" content="tablet" media="(min-width: 569px) and (max-width: 1024px)">
  <meta name="breakpoint" content="tablet-and-below" media="(max-width: 1024px)">
  <meta name="breakpoint" content="desktop" media="(min-width: 1025px)">
  <meta name="breakpoint" content="retina" media="only screen and (-webkit-min-device-pixel-ratio : 2)">
<!--<![endif]-->

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="grid">
  <div id="page" class="hfeed site">

  	<div class="box--outlined">
      <header id="masthead" class="site-header" role="banner">
    		<div class="site-branding">
    			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
    		</div>

    		<nav id="site-navigation" class="main-navigation" role="navigation">
    			<h1 class="menu-toggle"><?php _e( 'Menu', 'wp_smithett' ); ?></h1>
    			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wp_smithett' ); ?></a>

    			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    		</nav><!-- #site-navigation -->
    	</header><!-- #masthead -->
    </div>

  	<div id="content" class="site-content">
