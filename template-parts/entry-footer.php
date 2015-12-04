<footer class="entry-footer">
	<?php hybrid_post_terms( array( 'taxonomy' => 'category', 'text' => esc_html__( 'Posted in %s', 'hybrid-base' ) ) ); ?>
	<?php hybrid_post_terms( array( 'taxonomy' => 'post_tag', 'text' => esc_html__( 'Tagged %s', 'hybrid-base' ), 'before' => '<br>' ) ); ?>

	<?php
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'hybrid_s' ), esc_html__( '1 Comment', 'hybrid_s' ), esc_html__( '% Comments', 'hybrid_s' ) );
		echo '</span>';
	} ?>

	<?php
	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'hybrid_s' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	); ?>
</footer><!-- .entry-footer -->
