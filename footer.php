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
        <?php printf(
                /* Translators: 1 is current year, 2 is site name/link, 3 is WordPress name/link, and 4 is theme name/link. */
                __( 'Copyright &#169; %1$s %2$s. Powered by %3$s and %4$s.', 'stargazer' ), 
                date_i18n( 'Y' ), hybrid_get_site_link(), hybrid_get_wp_link(), hybrid_get_theme_link()
            ); ?>
		</div><!-- .site-info -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
