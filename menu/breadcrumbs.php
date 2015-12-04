<?php if ( ! function_exists( 'breadcrumb_trail' ) ) {
	return;
}
?>

	<?php breadcrumb_trail(
		array(
			'container'     => 'nav',
			'show_on_front' => false,
			'show_browse'   => false,
		)
	);
