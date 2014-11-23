<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package hybrid_s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<?php wp_head(); ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'hybrid_s' ); ?></a>

	<header <?php hybrid_attr( 'header' ); ?>>
        <div <?php hybrid_attr( 'branding' ); ?>>
					<?php hybrid_site_title(); ?>
					<?php hybrid_site_description(); ?>
				</div><!-- #branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'hybrid_s' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #header -->

	<div <?php hybrid_attr( 'content' ); ?>>
  <?php hybrid_get_menu( 'breadcrumbs' ); // Loads the menu/breadcrumbs.php template. ?>