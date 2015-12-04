<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hybrid_s
 */

?>

<article <?php hybrid_attr( 'post' ); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 ' . hybrid_get_attr( 'entry-title' ) . '>', '</h1>' );
			} else {
				the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' );
			} ?>

		<?php
			if ( 'post' === get_post_type() ) {
				get_template_part( 'template-parts/entry', 'meta' );
			} ?>
	</header><!-- .entry-header -->

	<div <?php hybrid_attr( 'entry-content' ); ?>>
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'hybrid_s' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hybrid_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php get_template_part( 'template-parts/entry', 'footer' ); ?>
</article><!-- #post-## -->
