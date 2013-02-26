<?php
/**
 * The Template for displaying all single posts.
 *
 * @package stratus
 * @since stratus 1.0
 */

get_header(); ?>

<div id="main" class="site-main">
	<div class="grid-wrapper">

		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'portfolio-single' ); ?>

				<div class="grid one-whole">
					<?php stratus_content_nav( 'nav-below' ); ?>
				</div>
				
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content .site-content -->

<?php get_footer(); ?>