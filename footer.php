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
	
</div><!-- #main .site-content -->

<?php get_template_part( 'off-canvas-nav' ); ?>
<div class="grid-wrapper">
	<div class="grid one-whole">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info milli">
				Adam Kiryk, Web Design and Development
			</div><!-- .site-info -->
		</footer><!-- #colophon .site-footer -->
	</div><!-- grid -->
</div><!-- grid-wrapper -->
<?php wp_footer(); ?>

</div><!-- #main-wrapper -->


</body>
</html>