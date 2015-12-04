<?php if ( ! has_nav_menu( 'primary' ) ) {
	return;
}
?>

	<nav <?php hybrid_attr( 'menu', 'primary' ); ?>>
		<button class="menu-toggle" aria-controls="menu-primary-items" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
		<?php wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container'       => '',
				'menu_id'         => 'menu-primary-items',
				'menu_class'      => 'menu-items nav-menu',
				'fallback_cb'     => '',
				'items_wrap'      => '<div class="menu-main-container"><ul id="%s" class="%s">%s</ul></div>'
			)
		); ?>

	</nav><!-- #menu-primary -->
