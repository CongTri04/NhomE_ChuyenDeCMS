<?php
/**
 * The template file for displaying comments section
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
?>

<div class="comment-container">
    <div class="comment-header">
        <!-- Header content if any -->
    </div>
    <div class="post-body">
        <h2>Make a Post</h2>
        <form action="<?php echo site_url('/wp-comments-post.php'); ?>" method="post" id="custom-comment-form" class="section-inner thin max-percentage">
            <textarea placeholder="What are you thinking..." name="comment" class="comment-textarea"></textarea>
            <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" />
            <a href="#" onclick="document.getElementById('custom-comment-form').submit();" class="share-button">Share</a>
        </form>
    </div>
</div>

<!-- Styles -->
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .comment-container, .comments {
        width: 700px;
        max-width: 100%;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
		
    }

    .comment-header, .comments-header {
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
