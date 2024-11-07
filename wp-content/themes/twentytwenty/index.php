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

<main id="site-content">
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .news-container {
        background-color: #00bcd4;
        padding: 20px 20px 0;
        max-width: 700px;
        margin: 0 auto;
        border-radius: 8px;
    }
    .news-item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    .news-date {
        color: #ffffff;
        font-size: 14px;
        text-align: center;
        margin-right: 20px;
        display: flex;
        align-items: center;
    }
    .news-date .day-month {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-right: 5px;
        font-size: 16px;
        font-weight: bold;
    }
    .day-month div {
        margin: 0;
    }
    .day-month .separator {
        width: 20px;
        height: 1px;
        background-color: #ffffff;
        margin: 2px 0;
    }
    .news-date .year {
        font-size: 14px;
        font-weight: bold;
        margin-left: 2px;
    }
    .news-content {
        color: #ffffff;
        font-size: 16px;
        font-weight: bold;
        margin-left: 30px; 

    }
    .news-content a {
        color: #ffffff;
        text-decoration: none;
        font-weight: bold;
    }
    .news-content a:hover {
        text-decoration: underline;
    }
    .view-all {
        display: inline-block;
        background-color: #4dd0e1;
        color: #ffffff;
        text-align: center;
        padding: 15px 0;
        font-size: 16px;
        font-weight: bold;
        margin-top: 20px;
        text-decoration: none;
        border-radius: 4px;
        width: calc(100% + 40px);
        margin-left: -20px;
        margin-right: -20px;
        transition: background-color 0.3s;
    }
    .view-all:hover {
        background-color: #26a69a;
    }
</style>

    <div class="news-container">
        <div class="news-item">
            <div class="news-date">
                <div class="day-month">
                    <div>13</div>
                    <div class="separator"></div>
                    <div>08</div>
                </div>
                <div class="year">23</div>
            </div>
            <div class="news-content">
                <a href="<?php echo get_permalink(get_page_by_path('sinh-vien-vuot-kho')); ?>">Sinh viên vượt khó, đạt thành tích nổi bật</a>
            </div>
        </div>
        <div class="news-item">
            <div class="news-date">
                <div class="day-month">
                    <div>13</div>
                    <div class="separator"></div>
                    <div>08</div>
                </div>
                <div class="year">23</div>
            </div>
            <div class="news-content">
                <a href="<?php echo get_permalink(get_page_by_path('thiet-ke-do-hoa-phac-hoa-tuong-lai')); ?>">Livestream với chủ đề: Thiết kế đồ họa - Phác họa tương lai</a>
            </div>
        </div>
        <div class="news-item">
            <div class="news-date">
                <div class="day-month">
                    <div>07</div>
                    <div class="separator"></div>
                    <div>08</div>
                </div>
                <div class="year">23</div>
            </div>
            <div class="news-content">
                <a href="<?php echo get_permalink(get_page_by_path('lam-chu-cong-nghe-cung-gen-z')); ?>">Livestream với chủ đề: Làm chủ công nghệ cùng Gen Z</a>
            </div>
        </div>
        <a href="<?php echo get_permalink(get_page_by_path('news')); ?>" class="view-all">XEM TẤT CẢ TIN TỨC</a>
    </div>
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
?>
