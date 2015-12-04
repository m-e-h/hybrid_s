<div class="entry-meta">
	<span class="posted-on">
	<?php esc_html_e( 'Posted on ', 'hybrid_s' ); ?>
		<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
	</span>
	<span class="byline">
	<?php esc_html_e( 'by ', 'hybrid_s' ); ?>
		<span <?php hybrid_attr( 'entry-author' ); ?>><?php the_author_posts_link(); ?></span>
	</span>
</div><!-- .entry-meta -->
