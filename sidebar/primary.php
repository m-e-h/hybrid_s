<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package hybrid_s
 */

if ( '1c' == get_theme_mod( 'theme_layout' ) || ! is_active_sidebar( 'primary' ) ) {
	return;
}
?>

<aside <?php hybrid_attr( 'sidebar', 'primary' ); ?>>
  <?php dynamic_sidebar( 'primary' ); ?>
</aside><!-- #sidebar-primary -->