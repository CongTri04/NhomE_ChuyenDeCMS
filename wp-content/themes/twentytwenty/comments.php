<?php
/**
 * The template file for displaying the comments and comment form for the
 * Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

if (post_password_required()) {
	return;
}

if ($comments) {
	?>

	<div class="comments" id="comments">

		<?php
		$comments_number = get_comments_number();
		?>

		<div class="comments-header section-inner small max-percentage">

			<h2 class="comment-reply-title">
				<?php
				if (!have_comments()) {
					_e('Leave a comment', 'twentytwenty');
				} elseif ('1' === $comments_number) {
					printf(_x('One reply on &ldquo;%s&rdquo;', 'comments title', 'twentytwenty'), get_the_title());
				} else {
					printf(
						_nx(
							'%1$s replies on &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'twentytwenty'
						),
						number_format_i18n($comments_number),
						get_the_title()
					);
				}
				?>
			</h2>

		</div>

		<div class="comments-inner section-inner thin max-percentage">
			<h2>Comments</h2>
			<hr>
			<ul>
				<?php
				wp_list_comments(
					array(
						'walker' => new TwentyTwenty_Walker_Comment(),
						'avatar_size' => 0,
						'style' => 'ul',
						'callback' => function ($comment, $args, $depth) {
							echo '<li class="comment-item">' . get_comment_text($comment) . '</li>';
						}
					)
				);
				?>
			</ul>
		</div>

	</div>

	<?php
}

if (comments_open() || pings_open()) {

	if ($comments) {
		echo '<hr class="styled-separator is-style-wide" aria-hidden="true" />';
	}

	comment_form(
		array(
			'class_form' => 'section-inner thin max-percentage',
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after' => '</h2>',
		)
	);

} elseif (is_single()) {

	if ($comments) {
		echo '<hr class="styled-separator is-style-wide" aria-hidden="true" />';
	}

	?>

	<div class="comment-respond" id="respond">
		<p class="comments-closed"><?php _e('Comments are closed.', 'twentytwenty'); ?></p>
	</div>

	<?php
}
?>

<style>
	body {
		font-family: Arial, sans-serif;
	}

	.comments {
		margin-top: 20px;
		background-color: #fff;
	}

	.comments-header {
		margin-bottom: 20px;
		text-align: center;
	}

	.comment-reply-title {
		font-size: 24px;
		color: #333;
	}

	.comments-inner h2 {
		font-size: 20px;
		color: #555;
		margin-bottom: 10px;
		text-align: left;
		margin-left: 50px;
	}

	.comments-inner hr {
		border: 0;
		border-top: 4px solid #e0e0e0;
		margin: 10px 0 20px;
		width: 60px;
		margin-left: 50px;
	}

	.comments-inner ul {
		list-style-type: none;
		padding: 0;
	}

	.comments-inner li.comment-item {
		padding: 15px;
		margin-bottom: 10px;
		background-color: #fff;
		border-radius: 5px;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		color: #333;
		font-size: 15px;
		line-height: 1.5;
	}

	.comments-pagination {
		text-align: center;
		margin-top: 20px;
	}

	.comments-pagination a {
		padding: 5px 10px;
		margin: 0 2px;
		background-color: #0073aa;
		color: #fff;
		border-radius: 3px;
		text-decoration: none;
	}

	.comments-pagination a:hover {
		background-color: #005177;
	}

	.comment-respond .comments-closed {
		font-size: 16px;
		color: #666;
		text-align: center;
		margin: 20px 0;
	}
</style>
