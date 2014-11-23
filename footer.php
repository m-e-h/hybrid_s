<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package hybrid_s
 */
?>

	</div><!-- #content -->

	<footer <?php hybrid_attr( 'footer' ); ?>>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'hybrid_s' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'hybrid_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'hybrid_s' ), 'hybrid_s', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
