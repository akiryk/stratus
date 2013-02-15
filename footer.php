<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package stratus
 * @since stratus 1.0
 */
?>

<?php /* Wrap up the divs from document and insert off canvas nav */ ?>

	<?php get_template_part( 'off-canvas-nav' ); ?>

	<footer id="colophon" class="site-footer cf" role="contentinfo">
		<div class="grid one-whole">
			<div class="site-info">
					<div class="footer-title"><?php bloginfo( 'name' ); ?> <?php bloginfo( 'description' ); ?></div>
			</div><!-- .site-info -->
		</div><!-- grid -->
	</footer><!-- #colophon .site-footer -->

<?php wp_footer(); ?>

</div><!-- grid-wrapper -->
</div><!-- #main .site-main -->

</body>
</html>