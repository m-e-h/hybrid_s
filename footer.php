<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hybrid_s
 */

?>

		<?php hybrid_get_sidebar( 'primary' ); // sidebar/primary.php ?>

	</div><!-- #content -->

	<?php hybrid_get_sidebar( 'subsidiary' ); // sidebar/subsidiary.php template. ?>

	<footer <?php hybrid_attr( 'footer' ); ?>>
		<div class="site-info">
			<?php printf(
				// 1 is current year, 2 is site name/link, 3 is WordPress name/link, and 4 is theme name/link.
				esc_html__( 'Copyright &#169; %1$s %2$s. Powered by %3$s and %4$s.', 'hybrid-base' ),
				date_i18n( 'Y' ), hybrid_get_site_link(), hybrid_get_wp_link(), hybrid_get_theme_link()
			); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
