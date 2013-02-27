<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package stratus
 * @since stratus 1.0
 */

get_header(); ?>

<div class="grid one-whole">
	<article id="post-0" class="post error404 not-found">
		<header class="entry-header">
			<h1 class="entry-title"><?php _e( 'Hmmmm.', 'stratus' ); ?></h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php 
				$text = "<p>It looks like I never made whatever it is you're looking for.</p> ";
				$text .= "<p>Although I'm sure it would be a good idea.</p>";
				$text .= "<p>I suggest you start at the <a href='http://www.adamkiryk.com'>home page</a> — and I apologize for any confusion.</p>" 
			?>
			<p><?php _e( $text, 'stratus' ); ?></p>

		</div><!-- .entry-content -->
	</article><!-- #post-0 .post .error404 .not-found -->
</div><!-- grid one-whole -->
</div> <!-- grid-wrapper -->
<?php get_footer(); ?>