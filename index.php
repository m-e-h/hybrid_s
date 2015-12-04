<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hybrid_s
 */

get_header(); ?>

	<main <?php hybrid_attr( 'content' ); ?>>

		<?php if ( ! is_front_page() && hybrid_is_plural() ) {
			get_template_part( 'template-parts/archive', 'header' );
		} ?>

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				hybrid_get_content_template(); // content/*.php

				if ( is_singular() && ( comments_open() || get_comments_number() ) ) :
					comments_template();
				endif;

			endwhile;

			get_template_part( 'template-parts/loop', 'nav' );

		else :

			get_template_part( 'content/none' );

		endif; ?>

	</main><!-- #content -->

<?php
get_footer();
