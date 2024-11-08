<?php

/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="post-container" style="display: flex; justify-content: space-between;">
		<!-- Phần danh mục bên trái -->
		<div class="category-sidebar" style="width: 25%; margin-right: 20px;">
			<?php if (is_single()) : ?>
				<?php get_template_part('template-parts/category'); ?>
			<?php endif; ?>

		</div>

		<!-- Phần chi tiết bài viết ở giữa -->

		<?php if (is_single()) : ?>
			<?php get_template_part('template-parts/detail'); ?>
		<?php endif; ?>

		<!-- Phần bổ sung ở bên phải -->
		<div class="additional-sidebar" style="width: 20%;">
			<?php get_template_part('template-parts/comment'); ?>
		</div>
	</div><!-- .post-container -->
	<?php

	if (is_single()) {

		get_template_part('template-parts/navigation');
	}

	/*
	 * Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 */
	if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && ! post_password_required()) {
	?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->A

	<?php
	}
	?>
	
</article>
