<?php
/**
 * The sidebar containing the footer widget area.
 *
 * @package hybrid_s
 */

if ( ! is_active_sidebar( 'subsidiary' ) ) {
	return;
}
?>

<aside <?php hybrid_attr( 'sidebar', 'subsidiary' ); ?>>
  <?php dynamic_sidebar( 'subsidiary' ); ?>
</aside><!-- #sidebar-subsidiary -->