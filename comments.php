<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>

	<div id="comments">
	 <?php if ( post_password_required() ) : ?>
		<div class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'WP-Skeleton' ); ?></div>
	</div><!-- .comments -->

	<?php return; endif; ?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 id="comments-title">
			<?php
			    printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number()),
			        number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above">
			<h1 class="section-heading"><?php _e( 'Comment navigation'); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments') ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;') ); ?></div>
		</nav>
		
		<?php endif; // check for comment navigation ?>

		<ol class="commentlist">
			<?php wp_list_comments(); ?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below">
			<h1 class="section-heading"><?php _e( 'Comment navigation'); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

	<?php else : // this is displayed if there are no comments so far ?>

		<?php if ( comments_open() ) : // If comments are open, but there are no comments ?>

		<?php else : // or, if we don't have comments:

			/* If there are no comments and comments are closed,
			 * let's leave a little note, shall we?
			 * But only on posts! We don't want the note on pages.
			 */
			if ( ! comments_open() && ! is_page() ) :
			?>
			<p class="nocomments"><?php _e( 'Comments are closed.'); ?></p>
			<?php endif; // end ! comments_open() && ! is_page() ?>


		<?php endif; ?>

	<?php endif; ?>

	<?php comment_form(array('comment_notes_after' => '')); ?>
	</div><!-- .comments -->

