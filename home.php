<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package stratus
 * @since stratus 1.0
 */

get_header(); ?>
				
<div id="primary" class="content-area"> <!-- allows for main content and sidebar -->
	<div id="content" class="site-content" role="main">

	<?php if ( !is_paged()) : ?>
		<div class="welcome-wrapper cf">
				<div class="grid one-whole">
					<?php 
						/* Display home page heading content only on the first page.
						 * (That is, not on paginated pages) 
						 */ 
						$page =  get_page_by_title( "Home" );
						$id =  $page->ID;
						$page_query = new WP_Query( 'page_id=' . $id );
						while ( $page_query->have_posts() ) :
							$page_query->the_post();
							?>
							<div class="hero"> <?php	the_content(); ?> </div>	
							<?php					
						endwhile;
						?>

						<h1 class="page-title">Some of My Work</h1>
					
					</div> <!-- grid -->
			</div> <!-- welcome-wrapper -->
		<?php endif; ?>
		
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content-portfolio-agg', get_post_format() );
			?>

		<?php endwhile; ?>

		<div class="grid one-whole">
			<?php stratus_content_nav( 'nav-below' ); ?>
		</div>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>

<?php get_footer(); ?>