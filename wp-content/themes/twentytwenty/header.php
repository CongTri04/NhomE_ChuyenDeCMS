<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Thêm link tới Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Thêm link tới CSS tùy chỉnh -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom-header.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header id="site-header" class="header-footer-group">
        <div class="navbar">
            <div class="logo">Group C</div>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-item">Home</a>

            <!-- Khu vực tìm kiếm -->
            <!-- Khu vực tìm kiếm -->
            <div class="search-container">
                <!-- Tìm kiếm theo kiểu tùy chỉnh -->
                <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="text" name="s" class="search-input" placeholder="Search" value="<?php echo get_search_query(); ?>" />
                    <input type="submit" class="search-submit" value="Submit" />
                </form>
            </div>
            <!-- Các mục điều hướng khác -->
            <a href="#" class="cate-item">Thể thao</a>
            <a href="#" class="cate-item">Khoa học</a>
            <a href="#" class="cate-item">Tin tức</a>

            <div class="right-menu">
                <!-- Nút menu với toggle -->
                <a href="#" class="nav-item">
                    <i class="fas fa-ellipsis-h icon"></i>
                    <?php _e('Menu', 'twentytwenty'); ?>
                </a>

                <a href="#" class="nav-item" onclick="document.querySelector('.search-modal').classList.toggle('active');">
                    <i class="fas fa-search icon"></i>
                    <?php _e('Search', 'twentytwenty'); ?>
                </a>
                <!-- Khu vực tài khoản người dùng -->
                <div class="account-container">
                    <i class="fas fa-user-circle account-icon"></i>
                    <div class="account-text" onclick="toggleDropdown()">
                        <?php _e('Account', 'twentytwenty'); ?>
                        <i class="fas fa-caret-down"></i>
                    </div>
                    <div class="dropdown" id="account-dropdown">
                        <a href="<?php echo esc_url(wp_login_url()); ?>"><?php _e('Profile', 'twentytwenty'); ?></a>
                        <a href="<?php echo esc_url(admin_url()); ?>"><?php _e('Settings', 'twentytwenty'); ?></a>
                        <a href="<?php echo esc_url(wp_logout_url()); ?>"><?php _e('Logout', 'twentytwenty'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #site-header -->

    <?php if (true === get_theme_mod('enable_header_search', true)) {
        get_template_part('template-parts/modal-search');
    } ?>

    <?php wp_footer(); ?>
    <script>
        // Hàm toggle để mở và đóng dropdown khi nhấn vào Account
        function toggleDropdown() {
            var dropdown = document.getElementById("account-dropdown");
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
        }
    </script>

</body>

</html>

<script>
    function toggleDropdown() {
        var dropdown = document.getElementById("account-dropdown");
        // Kiểm tra xem dropdown có đang hiển thị không
        dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
    }
</script>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .navbar {
        display: flex;
        align-items: center;
        background-color: #f8f8f8;
        padding: 10px 20px;
        border-bottom: 1px solid #ddd;
    }

    .navbar .logo {
        font-size: 24px;
        font-weight: bold;
        margin-right: 20px;
    }

    .navbar .nav-item {
        margin-right: 20px;
        color: #333;
        text-decoration: none;
        text-align: center;
    }

    .navbar .nav-item:hover {
        text-decoration: none;
    }

    .navbar .search-container {
        display: flex;
        align-items: center;
        margin-right: auto;
    }

    .navbar .search-container input[type="text"] {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-right: 5px;
        height: 36px;
        /* Chiều cao bằng với nút submit */
    }

    .navbar .search-container input[type="submit"] {
        padding: 5px 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        /* Màu nền trắng */
        color: #333;
        /* Màu chữ đen */
        cursor: pointer;
        height: 36px;
        /* Chiều cao cố định */
    }

    .navbar .search-container input[type="submit"]:hover {
        background-color: #e0e0e0;
        /* Màu nền khi hover */
        text-decoration: none;
    }

    .navbar .right-menu {
        display: flex;
        align-items: center;
    }

    .navbar .right-menu .nav-item {
        margin-right: 20px;
    }

    .navbar .right-menu .icon {
        display: block;
        margin-bottom: 5px;
    }

    .navbar .right-menu .account {
        position: relative;
        display: flex;
        align-items: center;
        text-align: center;
        flex-direction: column;
        cursor: pointer;
    }

    .navbar .right-menu .account .icon {
        display: block;
        margin-bottom: 5px;
    }

    .navbar .right-menu .account:hover .dropdown {
        display: block;
    }

    .navbar .right-menu .account .dropdown {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        background-color: #fff;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
        min-width: 160px;
    }

    .navbar .right-menu .account .dropdown a {
        color: #333;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .navbar .right-menu .account .dropdown a:hover {
        background-color: #f1f1f1;
    }

    /* Thiết kế cho các liên kết trong dropdown */
    .navbar .right-menu .dropdown a {
        color: #333;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .navbar .right-menu .dropdown a:hover {
        background-color: #f1f1f1;
    }

    .navbar .right-menu .account-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 14px;
        color: #666;
    }

    .navbar .right-menu .account-icon {
        font-size: 24px;
        margin-bottom: 5px;
    }

    .navbar .right-menu .account-text {
        display: flex;
        align-items: center;
        cursor: pointer;
        /* Thêm cursor pointer để cho thấy đây là khu vực có thể click */
    }

    .navbar .right-menu .account-text i {
        margin-left: 2px;
        font-size: 10px;
    }

    .cate-item {
        margin-right: 40px;
        /* Thêm khoảng cách giữa các mục */
        text-decoration: none;
        color: #333;
        font-size: 16px;
        display: inline-block;
    }

    .logo-item {
        margin-left: 20px;
        /* Thêm khoảng cách giữa các mục */
        text-decoration: none;
        color: #333;
        font-size: 16px;
        display: inline-block;
    }

    /* Thiết kế cho ô tìm kiếm và nút submit */
    .search-container {
        display: flex;
        align-items: center;
        margin-left: 50px;
    }

    .search-input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        outline: none;
        font-size: 16px;
        margin-right: 5px;
    }

    .search-submit {
        padding: 10px 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f9f9f9;
        cursor: pointer;
        font-size: 16px;
    }

    .search-submit:hover {
        background-color: #e9e9e9;
    }

    .search-modal {
        display: none;
    }

    .search-modal.active {
        display: block;
    }

    /* Đảm bảo rằng dropdown sẽ bị ẩn mặc định */
    .dropdown {
        display: none;
        /* Ẩn dropdown */
        position: absolute;
        top: 100%;
        right: 0;
        background-color: #fff;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
        min-width: 160px;
    }

    /* Hiển thị dropdown khi người dùng nhấn vào */
    .account:hover .dropdown {
        display: block;
        /* Hiển thị dropdown khi hover */
    }
</style>