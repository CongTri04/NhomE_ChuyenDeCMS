<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- Thêm link tới file Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- Thêm link tới file CSS mới -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom-header.css">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header id="site-header" class="header-footer-group">
        <div class="navbar">
            <div class="logo">Group C</div>
            <a href="#" class="nav-item">Home</a>
            <div class="search-container">
                <input type="text" placeholder="Search">
                <input type="submit" value="Submit">
            </div>
            <a href="#" class="nav-item">Thể thao</a>
            <a href="#" class="nav-item">Khoa học</a>
            <a href="#" class="nav-item">Tin tức</a>
            <div class="right-menu">
                <a href="#" class="nav-item">
                    <i class="fas fa-ellipsis-h icon"></i>
                    Menu
                </a>
                <a href="#" class="nav-item">
                    <i class="fas fa-search icon"></i>
                    Search
                </a>
                <div class="account">
                    <i class="fas fa-user-circle icon"></i>
                    <span>Account</span>
                    <div class="dropdown">
                        <a href="#">Profile</a>
                        <a href="#">Settings</a>
                        <a href="#">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #site-header -->
