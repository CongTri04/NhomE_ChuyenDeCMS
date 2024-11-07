<?php
get_header();
?>

<main id="site-content">
    <div class="container my-5">
        <!-- Gọi file comment.php để hiển thị phần bình luận -->
        <?php get_template_part('comments'); ?>
    </div>
</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets'); ?>
<?php get_footer(); ?>
