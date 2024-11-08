<?php
/**
 * Template for displaying comments and post form
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

if (post_password_required()) {
    return;
}

?>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .post-container, .comments {
        width: 700px;
        max-width: 100%;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
		
    }

    .post-header, .comments-header {
        background-color: #f1f1f1;
        padding: 23px;
        border-bottom: none;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    .post-body h2, .comment-reply-title {
        margin: 0;
        font-size: 16px;
        color: #333;
        display: inline-block;
        padding: 5px 10px;
        border: 1px solid #ddd;
        position: relative;
        top: -25.8px;
        font-weight: normal;
        background-color: #fff;
        border-bottom: none;
        opacity: 0.9;
    }

    .post-body, .comments-inner {
        padding: 15px;
        position: relative;
        top: -20px;
    }

    .post-body textarea, .comments-inner textarea {
        width: 100%;
        height: 80px;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        font-size: 14px;
        resize: none;
    }

    .post-footer, .comments-pagination {
        display: flex;
        justify-content: flex-end;
        padding: 5px 15px;
        margin-top: -10px;
    }

    .share-button, .comments-pagination a {
        display: inline-block;
        background-color: #007bff;
        color: #fff;
        text-align: center;
        padding: 12px 15px;
        font-size: 14px;
        font-weight: normal;
        margin-bottom: 3px;
        text-decoration: none;
		margin-top: 4%;
		margin-left: 88%;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .share-button:hover, .comments-pagination a:hover {
        background-color: #0056b3;
    }

    /* Additional styling for comments */
    .comments-inner h2 {
        font-size: 20px;
        color: #555;
        margin-bottom: 10px;
        text-align: left;
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
</style>

<!-- Comments Section -->
<div class="comments" id="comments">
    <?php
    $comments_number = get_comments_number();
    ?>
    <div class="comments-header section-inner small max-percentage">
        <h2 class="comment-reply-title">
            <?php
            if (! have_comments()) {
                _e('Leave a comment', 'twentytwenty');
            } elseif ('1' === $comments_number) {
                printf(_x('One reply on &ldquo;%s&rdquo;', 'comments title', 'twentytwenty'), get_the_title());
            } else {
                printf(
                    _nx(
                        '%1$s reply on &ldquo;%2$s&rdquo;',
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

<!-- Post Form Section -->
<div class="post-container">
    <div class="post-header">
        <!-- Header content if any -->
    </div>
    <div class="post-body">
        <h2>Make a Post</h2>
        <?php
        comment_form(
			array(
				'class_form'         => 'section-inner thin max-percentage',
				'title_reply'        => '',
				'comment_field'      => '<textarea placeholder="What are you thinking..." name="comment" class="comment-textarea"></textarea>',
				'title_reply_before' => '',
				'title_reply_after'  => '',
				'label_submit'       => '',
				'submit_button'      => '<a href="#" onclick="document.getElementById(\'commentform\').submit();" class="share-button">Share</a>',
				'submit_field'       => '%1$s %2$s',
			)
		);
        ?>
    </div>
</div>
