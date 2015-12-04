<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package hybrid_s
 */

if ( ! is_active_sidebar( 'primary' ) ) {
	return;
}
?>

<aside <?php hybrid_attr( 'sidebar', 'primary' ); ?>>
  <?php dynamic_sidebar( 'primary' ); ?>
</aside><!-- #sidebar-primary -->
