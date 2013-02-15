<?php
/**
 * @package stratus
 * @since stratus 1.0
 * Aggregation of portfolio items -- home page.
 * This page defines how each post or custom post type appears on an aggregation page like index, home, or archive pages.
 * To customize how one of those pages displays this content, add the following to the appropriate page (e.g. archive.php):
 * > get_template_part( 'content-__', get_post_format() ); // where 'content-__' says content-your-name-here
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cf agg-article'); ?>>

	<?php $gridClass = "one-whole"; ?>
			
			<?php if (has_post_thumbnail()){ ?>
				<?php $gridClass = "two-thirds"; ?>
				<div class="grid one-third">	
					<div class="primary-image">
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'stratus' ), the_title_attribute( 'echo=0' ) ) ); ?>">
							<?php the_post_thumbnail('agg-image'); ?>
						</a>
					</div>
				</div> <!-- end .one-third -->
			<?php } ?>
			<div class="grid <?php echo $gridClass; ?>">
				<header class="agg-header">
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'stratus' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
						<span class="kicker"><?php echo esc_html( get_post_meta( get_the_ID(), 'micro_teaser', true ) ); ?></span>
					</a>
					
					<h1 class="agg-title">
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'stratus' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
							<?php the_title(); ?>
						</a>
					</h1>
				</header><!-- .entry-header -->

				<div class="portfolio-excerpt lap-up">
					<?php the_content('', FALSE, ''); ?>

					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'stratus' ), 'after' => '</div>' ) ); ?>
				
				</div><!-- .portfolio-excerpt -->

		</div><!-- end .two-thirds -->
	</a>
</article><!-- #post-<?php the_ID(); ?> -->
