<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hybrid_s
 */

?>

<article <?php hybrid_attr( 'post' ); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>

		<?php
		if ( 'post' === get_post_type() ) :
			get_template_part( 'template-parts/entry', 'meta' );
		endif; ?>
	</header><!-- .entry-header -->

	<div <?php hybrid_attr( 'entry-summary' ); ?>>
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<?php get_template_part( 'template-parts/entry', 'footer' ); ?>
</article><!-- #post-## -->
