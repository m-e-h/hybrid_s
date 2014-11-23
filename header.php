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

		<?php hybrid_get_menu( 'primary' ); // Loads the menu/primary.php template. ?>
		
	</header><!-- #header -->

	<div <?php hybrid_attr( 'content' ); ?>>

  <?php hybrid_get_menu( 'breadcrumbs' ); // Loads the menu/breadcrumbs.php template. ?>