<?php
/**
 * @package stratus
 * @since stratus 1.0
 */
?>
<div class="grid one-whole">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<time class="entry-meta post-date">
		<?php if (get_post_type() == 'portfolio'): ?>
			<span class="">Created </span><?php echo esc_html( get_post_meta( get_the_ID(), 'date_project_completed', true ) ); ?>
		<?php else:  ?>
			<?php stratus_posted_on(); ?>
		<?php endif; ?>
	</time>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'stratus' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php //the_tags( "<div class='tag-item'>", "", "</div>" ); ?>

		<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'stratus' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'stratus' ), $tags_list ); ?>
			</span>
		<?php endif; // End if $tags_list ?>
		
	</footer><!-- .entry-meta -->

	<?php MRP_show_related_posts(); ?>
	
</article><!-- #post-<?php the_ID(); ?> -->
