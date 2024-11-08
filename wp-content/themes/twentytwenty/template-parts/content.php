<html>
 <head>
  <title>
   News Page
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        .news-item {
            display: flex;
            background-color: #fff;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .news-image img {
            width: 200px;
            height: 150px;
            object-fit: cover;
        }
        .news-content {
            padding: 20px;
            flex: 1;
        }
        .news-date {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
            margin-right: 20px;
        }
        .news-date .day {
            display: block;
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
        }
        .news-date .month {
            display: block;
            font-size: 14px;
            color: #666;
        }
        .news-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        .news-description {
            font-size: 14px;
            color: #666;
        }
  </style>
 </head>
 <body>
  <div class="container">
   <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="news-item">
     <!-- Phần 1: Ảnh đại diện -->
     <div class="news-image">
      <?php
            // Kiểm tra ảnh đại diện có tồn tại không
            if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'medium' ); // Hiển thị ảnh đại diện với kích thước trung bình
            }
            ?>
     </div>
     <!-- Phần 2: Ngày tháng -->
     <div class="news-date">
      <div class="day">
       <?php echo get_the_date( 'd' ); ?>
      </div>
      <div class="month">
       <?php echo get_the_date( 'F' ); ?>
      </div>
     </div>
     <!-- Phần 3: Tiêu đề và mô tả -->
     <div class="news-content">
      <!-- Tiêu đề bài viết -->
      <div class="news-title">
       <a href="<?php the_permalink(); ?>" rel="bookmark">
        <?php the_title(); ?>
       </a>
      </div>
      <!-- Mô tả ngắn gọn của bài viết -->
      <div class="news-description">
       <?php
                // Hiển thị đoạn trích cho kết quả tìm kiếm
                if ( is_search() ) {
                    the_excerpt();
                } else {
                    the_content( __('Continue reading', 'twentytwenty') );
                }
                ?>
      </div>
     </div>
    </div>
    <!-- .news-item -->
   </article>
   <!-- .post -->
  </div>
 </body>
</html>