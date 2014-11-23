<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package hybrid_s
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div <?php hybrid_attr( 'sidebar', 'secondary' ); ?>>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
