<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package platinum
 */
?>

	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'footer' ) ) : ?>
	<footer class="site-footer">
		<div class="footer-widget">
			<?php dynamic_sidebar( 'footer' ); ?>
		</div><!-- #footer-widget -->
	</footer>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
