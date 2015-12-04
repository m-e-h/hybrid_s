<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hybrid_s
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head <?php hybrid_attr( 'head' ); ?>>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<?php wp_head(); ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hybrid_s' ); ?></a>

	<header <?php hybrid_attr( 'header' ); ?>>
		<div <?php hybrid_attr( 'branding' ); ?>>
			<?php hybrid_site_title(); ?>
			<?php hybrid_site_description(); ?>
		</div><!-- .site-branding -->

		<?php hybrid_get_menu( 'primary' ); // menu/primary.php ?>
	</header><!-- #header -->

	<div id="layout" class="content-layout">
