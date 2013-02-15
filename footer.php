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

	<div class="grid one-whole">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
					Footer Info
			</div><!-- .site-info -->
		</footer><!-- #colophon .site-footer -->
	</div><!-- grid -->

<?php wp_footer(); ?>

</div><!-- grid-wrapper -->
</div><!-- #main .site-main -->

</body>
</html>