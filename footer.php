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

	</div><!-- #content .site-content -->
	<?php get_template_part( 'off-canvas-nav' ); ?>
</div><!-- #primary .content-area -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="grid one-whole">
			<div class="site-info">
					Footer Info
			</div><!-- .site-info -->
		</div><!-- grid -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</div><!-- grid-wrapper -->
</div><!-- #main .site-main -->

</body>
</html>