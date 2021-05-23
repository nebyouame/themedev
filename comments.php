<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$DarkTheme_comments_number = get_comments_number();

?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>

        <h2 class="comments-title">
			<?php
			$myDarkTheme_comments_number = get_comments_number();
			if ( '1' === $DarkTheme_comments_number ) {
				/* translators: %s: post title */
				printf( esc_html( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'DarkTheme' ), get_the_title() );
			} else {
				printf(
				/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s thought on &ldquo;%2$s&rdquo;',
						'%1$s thoughts on &ldquo;%2$s&rdquo;',
						esc_html($DarkTheme_comments_number),
						'comments title',
						'DarkTheme'
					),
					esc_html(number_format_i18n( $DarkTheme_comments_number )),
					get_the_title()
				);
			}
			?>
        </h2><!-- .comments-title -->


		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'DarkTheme' ); ?></h2>
                <div class="navigation post-navigation container comment-navigation">
                    <div class="row">
                        <div class="nav-previous col-md-6 text-left"><?php previous_comments_link( esc_html__( '<< Older Comments', 'DarkTheme' ) ); ?></div>
                        <div class="nav-next col-md-6 text-right"><?php next_comments_link( esc_html__( 'Newer Comments >>', 'DarkTheme' ) ); ?></div>
                    </div>
                </div><!-- .nav-links -->
            </nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

        <ul class="comment-list">
			<?php
			wp_list_comments( array( 'callback' => 'DarkTheme_post_comment', 'avatar_size' => 80 ));
			?>
        </ul><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'DarkTheme' ); ?></h2>
                <div class="navigation post-navigation container comment-navigation">
                    <div class="row">
                        <div class="nav-previous col-md-6 text-left"><?php previous_comments_link( esc_html__( '<< Older Comments', 'DarkTheme' ) ); ?></div>
                        <div class="nav-next col-md-6 text-right"><?php next_comments_link( esc_html__( 'Newer Comments >>', 'DarkTheme' ) ); ?></div>
                    </div>
                </div><!-- .nav-links -->
            </nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'myPersonalinfo' ); ?></p>
	<?php
	endif; ?>

    <?php
        comment_form();
	?>

</div><!-- #comments -->
