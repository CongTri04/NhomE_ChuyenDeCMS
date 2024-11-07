<?php
/**
 * The template file for displaying comments section
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
?>

<div class="post-container">
    <div class="post-header">
    </div>
    <div class="post-body">
        <h2>Make a Post</h2>
        <textarea placeholder="What are you thinking..."></textarea>
    </div>
    <div class="post-footer">
        <a href="<?php echo get_permalink(get_page_by_path('news')); ?>" class="share-button">Share</a>
    </div>
</div>

<!-- Styles -->
<style>
    .post-container {
        width: 700px;
        max-width: 100%;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
    }
    .post-header {
        background-color: #f1f1f1;
        padding: 23px;
        border-bottom: none;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }
    .post-body h2 {
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
    .post-body {
        padding: 15px;
        position: relative;
        top: -20px;
    }
    .post-body textarea {
        width: 100%;
        height: 80px;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        font-size: 14px;
        resize: none;
    }
    .post-footer {
        display: flex;
        justify-content: flex-end;
        padding: 5px 15px;
        margin-top: -10px;
    }
    .post-footer .share-button {
        display: inline-block;
        background-color: #007bff;
        color: #fff;
        text-align: center;
        padding: 12px 15px;
        font-size: 14px;
        font-weight: normal;
        margin-bottom: 3px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .post-footer .share-button:hover {
        background-color: #0056b3;
    }
</style>
