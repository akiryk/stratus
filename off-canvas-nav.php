<section id="sidebar-nav" class="" role="complementary">
	<nav role="navigation" class="site-navigation mobile-navigation">
	<h1 class="accessibility"><?php _e( 'Menu', 'stratus' ); ?></h1>
	<?php wp_nav_menu( array( 
		'theme_location' => 'primary', 
		'menu_class' => 'nav nav--stacked', ) 
	); ?>
</nav><!-- .site-navigation .main-navigation --></section>