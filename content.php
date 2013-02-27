<?php
/**
 * @package stratus
 * @since stratus 1.0
 * This page defines how each post or custom post type appears on an aggregation page like index, home, or archive pages.
 * To customize how one of those pages displays this content, add the following to the appropriate page (e.g. archive.php):
 * > get_template_part( 'content-__', get_post_format() ); // where 'content-__' says content-your-name-here
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" class="quiet-link" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'stratus' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	</header><!-- .entry-header -->

	<?php if ( 'post' == get_post_type() ) : ?>
		<time class="entry-meta post-date">
			<?php stratus_posted_on(); ?>
		</time><!-- .entry-meta -->
	<?php endif; ?>

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			if($post->post_excerpt):
				the_excerpt(); 
			else :
				the_content('', FALSE, '');
			endif; ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'stratus' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'stratus' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'stratus' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php edit_post_link( __( 'Edit', 'stratus' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
