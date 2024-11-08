<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .container {
            width: 300px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #e0e0e0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            font-size: 24px;
            font-weight: bold;
            color: #333333;
            margin-bottom: 10px;
        }

        .header::after {
            content: "";
            display: block;
            width: 100%;
            height: 2px;
            background: repeating-linear-gradient(45deg,
                    #e0e0e0,
                    #e0e0e0 10px,
                    #ffffff 10px,
                    #ffffff 20px);
            margin-top: 5px;
        }

        .category-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .category-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .category-item:last-child {
            border-bottom: none;
        }

        .category-item .dot {
            width: 8px;
            height: 8px;
            background-color: #ffd700;
            border-radius: 50%;
            margin-right: 10px;
        }

        .category-item a {
            text-decoration: none;
            color: #333333; /* Màu chữ đen */
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">Categories</div>
        <ul class="category-list">
            <?php
            // Lấy tất cả danh mục từ WordPress
            $categories = get_categories(); // Lấy danh sách danh mục
            foreach ($categories as $category) {
                echo '<li class="category-item">';
                echo '<span class="dot"></span>';
                echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                echo '</li>';
            }
            ?>
        </ul>

    </div>
</body>

</html>
