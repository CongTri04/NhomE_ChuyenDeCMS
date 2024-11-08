<div class="comments-inner section-inner thin max-percentage">
    <h2>Comments</h2>
    <hr>
    <ul>
        <?php
        // Query lấy tất cả bình luận của toàn bộ website
        $args = array(
            'status' => 'approve',  // Chỉ lấy bình luận đã được phê duyệt
            'order'  => 'DESC',     // Sắp xếp bình luận mới nhất lên đầu
            'number' => 5,         // Lấy 20 bình luận gần đây
        );
        $comments = get_comments($args);

        // Duyệt và hiển thị bình luận
        foreach ($comments as $comment) {
            echo '<li class="comment-item">' . get_comment_text($comment) . '</li>';
        }
        ?>
    </ul>
</div>
<style>
	body {
		font-family: Arial, sans-serif;
	}

	.comments {
		margin-top: 0px;
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
        margin-top: 50px;
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