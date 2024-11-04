<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<!-- Styles -->
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }
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
        border-bottom: none; /* Xóa viền dưới */
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
        border-bottom: none; /* Xóa viền dưới */
		opacity: 0.9; /* Làm cho chữ mờ đi */
    }
    .post-body {
        padding: 15px;
        position: relative; /* Thêm position relative để điều chỉnh vị trí */
        top: -20px; /* Di chuyển hộp thoại lên trên */
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
        display: inline-block; /* Giúp liên kết hành xử như nút bấm */
        background-color: #007bff;
        color: #fff;
        text-align: center;
        padding: 12px 15px; /* Độ đệm cho nút */
        font-size: 14px; /* Kích thước chữ */
        font-weight: normal;
		margin-bottom: 3px;
        text-decoration: none; /* Loại bỏ gạch chân khỏi liên kết */
        border-radius: 5px; /* Bo góc cho nút */
        transition: background-color 0.3s; /* Hiệu ứng chuyển tiếp mượt mà khi hover */
    }
    .post-footer .share-button:hover {
        background-color: #0056b3; /* Màu tối hơn khi hover */
    }
</style>

<main id="site-content">
    <div class="container my-5">
        <div class="post-container">
            <div class="post-header">
             
            </div>
            <div class="post-body">
                <h2>Make a Post</h2>
                <textarea placeholder="What are you thinking..."></textarea>
            </div>
            <div class="post-footer">
                <a href="<?php echo get_permalink(get_page_by_path('news')); ?>" class="share-button">share</a>
            </div>
        </div>
    </div>
</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets'); ?>
<?php get_footer(); ?>
