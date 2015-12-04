<?php

# Register custom image sizes.
add_action( 'init', 'hybrid_s_register_image_sizes', 5 );

# Register custom layouts.
add_action( 'hybrid_register_layouts', 'hybrid_s_register_layouts' );

/**
 * Registers custom image sizes for the theme.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function hybrid_s_register_image_sizes() {

	// Sets the 'post-thumbnail' size.
	//set_post_thumbnail_size( 150, 150, true );
}

/**
 * Registers layouts.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function hybrid_s_register_layouts() {

	hybrid_register_layout( '1c', array(
		'label' => esc_html__( '1 Col', 'hybrid_s' ),
		'image' => '%s/images/layouts/1c.svg'
		) );
	hybrid_register_layout( '2c-l', array(
		'label' => esc_html__( '2 Col: Content/Sidebar', 'hybrid_s' ), 'image' => '%s/images/layouts/2c-l.svg'
		) );
	hybrid_register_layout( '2c-r', array(
		'label' => esc_html__( '2 Col: Sidebar/Content', 'hybrid_s' ), 'image' => '%s/images/layouts/2c-r.svg'
		) );
}
