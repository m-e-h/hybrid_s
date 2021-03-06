<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package hybrid_s
 */

get_header(); ?>

	<main <?php hybrid_attr( 'content' ); ?>>

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'hybrid_s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'content/search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'content/none' );

		endif; ?>

	</main><!-- #main -->

<?php
get_footer();
