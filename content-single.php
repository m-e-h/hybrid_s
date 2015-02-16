<?php
/**
 * @package hybrid_s
 */
?>

<article <?php hybrid_attr( 'post' ); ?>>
	<header class="entry-header">
		<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php single_post_title(); ?></h1>

		<div class="entry-meta">
			<?php hybrid_s_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div <?php hybrid_attr( 'entry-content' ); ?>>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'hybrid_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php hybrid_s_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
