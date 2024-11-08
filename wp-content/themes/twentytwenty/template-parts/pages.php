<html>
 <head>
  <title>
   Trang mới nhất
  </title>
  <style>
   body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 20%;  /* Giảm chiều rộng container */
            margin: 0 auto;
            border: 1px solid #007bff;
            padding: 15px;  /* Giảm padding */
        }
        .title {
            font-size: 20px;  /* Giảm kích thước font tiêu đề */
            color: #007bff;
            border-bottom: 1px solid #007bff;
            padding-bottom: 8px;  /* Giảm khoảng cách dưới tiêu đề */
            margin-bottom: 15px;  /* Giảm khoảng cách dưới tiêu đề */
        }
        .news-item {
            margin-bottom: 15px;  /* Giảm khoảng cách giữa các mục tin */
        }
        .news-item img {
            width: 100%;  /* Đảm bảo ảnh chiếm toàn bộ chiều rộng nhưng nhỏ hơn */
            height: auto;
        }
        .news-title {
            font-size: 16px;  /* Giảm kích thước font của tiêu đề tin */
            font-weight: bold;
            margin: 8px 0;  /* Giảm khoảng cách xung quanh tiêu đề */
        }
        .news-description {
            font-size: 12px;  /* Giảm kích thước font mô tả */
            color: #555;
        }
        .load-more {
            text-align: center;
            margin-top: 20px;
        }
  </style>
 </head>
 <body>
  <div class="container">
   <div class="title">
    Trang mới nhất
   </div>

   <div id="news-list">
       <?php
       // Lấy danh sách các trang
       $args = array(
           'post_type' => 'page',  // Loại nội dung là trang (page)
           'posts_per_page' => 3,  // Số lượng trang hiển thị
           'orderby' => 'date',    // Sắp xếp theo ngày
           'order' => 'DESC'       // Hiển thị trang mới nhất lên đầu
       );

       $latest_pages = new WP_Query($args);

       if ($latest_pages->have_posts()) :
           while ($latest_pages->have_posts()) : $latest_pages->the_post();
       ?>
       
       <div class="news-item">
        <!-- Hiển thị ảnh đại diện của trang -->
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>

        <div class="news-title">
         <?php the_title(); ?>
        </div>
        <div class="news-description">
         <?php the_excerpt(); ?>
        </div>
       </div>

       <?php endwhile; ?>

       <?php wp_reset_postdata(); ?>
       
       <?php else : ?>
           <p><?php esc_html_e('No recent pages found.', 'textdomain'); ?></p>
       <?php endif; ?>
   </div>
 </body>
</html>
