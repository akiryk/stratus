<?php
/**
 * @package stratus
 * @since stratus 1.0
 */
?>
<div class="grid one-whole">
Hellos
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<time class="entry-meta">
			<?php if (get_post_type() == 'portfolio'): ?>
				<span class="">Created </span><?php echo esc_html( get_post_meta( get_the_ID(), 'date_project_completed', true ) ); ?>
			<?php else:  ?>
				<?php stratus_posted_on(); ?>
			<?php endif; ?>
		</time>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'stratus' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">

		<?php the_tags( "<div class='tag-item'>", "", "</div>" ); ?>

		<?php edit_post_link( __( 'Edit', 'stratus' ), '<span class="edit-link">', '</span>' ); ?>
		
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
