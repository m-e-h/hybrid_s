<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package hybrid_s
 */

if ( ! function_exists( 'hybrid_s_loop_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function hybrid_s_loop_nav() {
  if ( is_singular( 'post' ) ) : ?>

	<div class="loop-nav">
		<?php previous_post_link( '<div class="prev">' . __( 'Previous Post: %link', 'hybrid_s' ) . '</div>', '%title' ); ?>
		<?php next_post_link(     '<div class="next">' . __( 'Next Post: %link',     'hybrid_s' ) . '</div>', '%title' ); ?>
	</div><!-- .loop-nav -->

<?php elseif ( is_home() || is_archive() || is_search() ) : ?>

	<?php loop_pagination(
		array(
			'prev_text' => _x( '&larr; Previous', 'posts navigation', 'hybrid-base' ),
			'next_text' => _x( 'Next &rarr;',     'posts navigation', 'hybrid-base' )
		)
	); ?>

<?php endif; // End check for type of page being viewed. ?>
	<?php
}
endif;


if ( ! function_exists( 'hybrid_s_byline' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function hybrid_s_byline() { ?>
				<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
				<span <?php hybrid_attr( 'entry-author' ); ?>><?php the_author_posts_link(); ?></span>
	<?php
}
endif;


if ( ! function_exists( 'hybrid_s_post_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function hybrid_s_post_footer() { ?>
			<?php hybrid_post_terms( array( 'taxonomy' => 'category', 'text' => __( 'Posted in %s', 'hybrid-base' ) ) ); ?>
			<?php hybrid_post_terms( array( 'taxonomy' => 'post_tag', 'text' => __( 'Tagged %s', 'hybrid-base' ), 'before' => '<br />' ) ); ?>
			<?php comments_popup_link( number_format_i18n( 0 ), number_format_i18n( 1 ), '%', 'comments-link', '' ); ?>
			<?php edit_post_link(); ?>
	<?php
}
endif;


if ( ! function_exists( 'hybrid_s_comments_nav' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function hybrid_s_comments_nav() { ?>
<?php if ( get_option( 'page_comments' ) && 1 < get_comment_pages_count() ) : // Check for paged comments. ?>

	<nav class="comments-nav" role="navigation" aria-labelledby="comments-nav-title">

		<h3 id="comments-nav-title" class="screen-reader-text"><?php _e( 'Comments Navigation', 'hybrid-base' ); ?></h3>

		<?php previous_comments_link( _x( '&larr; Previous', 'comments navigation', 'hybrid-base' ) ); ?>

		<span class="page-numbers"><?php 
			/* Translators: Comments page numbers. 1 is current page and 2 is total pages. */
			printf( __( 'Page %1$s of %2$s', 'hybrid-base' ), get_query_var( 'cpage' ) ? absint( get_query_var( 'cpage' ) ) : 1, get_comment_pages_count() ); 
		?></span>

		<?php next_comments_link( _x( 'Next &rarr;', 'comments navigation', 'hybrid-base' ) ); ?>

	</nav><!-- .comments-nav -->

<?php endif; // End check for paged comments. ?>
	<?php
}
endif;


if ( ! function_exists( 'hybrid_s_comments_error' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function hybrid_s_comments_error() { ?>
<?php if ( pings_open() && !comments_open() ) : ?>

	<p class="comments-closed pings-open">
		<?php
			/* Translators: The two %s are placeholders for HTML. The order can't be changed. */
			printf( __( 'Comments are closed, but %strackbacks%s and pingbacks are open.', 'hybrid-base' ), '<a href="' . esc_url( get_trackback_url() ) . '">', '</a>' );
		?>
	</p><!-- .comments-closed .pings-open -->

<?php elseif ( !comments_open() ) : ?>

	<p class="comments-closed">
		<?php _e( 'Comments are closed.', 'hybrid-base' ); ?>
	</p><!-- .comments-closed -->

<?php endif; ?>
	<?php
}
endif;