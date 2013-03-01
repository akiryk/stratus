	<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package stratus
 * @since stratus 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script type="text/javascript" src="//use.typekit.net/vdt8eam.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<title><?php wp_title( '|', true, 'right' ); ?></title>

<!-- Required for working with adaptive images (http://adaptive-images.com/): -->
<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class('hide-extras off-canvas'); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<div class="masthead-palm-wrapper cf">
	<div class="masthead-wrapper">

		<header class="site-header" role="banner">
			<div class="grid-wrapper">
				<div class="grid one-whole">

					<hgroup class="title-group tightest">
						<h1 class="site-title tightest">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="no-underline" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
							<span class="site-description lap-up-inline"><?php bloginfo( 'description' ); ?></span>
							</a>
						</h1>
					</hgroup>

					<nav id="menu" role="navigation" class="site-navigation main-navigation hide-for-small">
						<h1 class="accessibility"><?php _e( 'Menu', 'stratus' ); ?></h1>
						<div class="accessibility skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'stratus' ); ?>"><?php _e( 'Skip to content', 'stratus' ); ?></a></div>
						<?php wp_nav_menu( array( 
							'theme_location' => 'primary', 
							'menu_class' => 'nav tightest', ) 
						); ?>
					</nav><!-- .site-navigation .main-navigation -->

					<p class="show-for-small tightest">
					  <a class="sidebar-button button" id="sidebarButton" href="#sidebar" title="menu for small screens">
					  	<span class="icon-reorder"></span>
					  </a>
					</p>

					</div><!-- .grid -->
				</div><!-- .grid-wrapper -->
			</header><!-- .site-header -->

	</div><!-- .masthead-wrapper -->
</div>

<div id="main-wrapper" class="outer-wrapper">
	<div id="main" class="site-content" role="main">
		<div class="grid-wrapper">
