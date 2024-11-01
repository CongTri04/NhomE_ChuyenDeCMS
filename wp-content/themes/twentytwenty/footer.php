<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="site-footer" class="header-footer-group">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- ---- Include the above in your HEAD tag ---------->

	<!-- Footer -->


	<!-- Chèn nội dung footer mới ở đây -->
	<footer id="site-footer" class="header-footer-group">
		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4">
						<ul class="list-unstyled quick-links">
							<h1 style="color: white; ">| Quick links</h1>
							<?php
							$categories = get_categories(); // Lấy danh sách danh mục
							foreach ($categories as $category) {
								echo '<li><i class="fa fa-angle-double-right" style="color: white;"></i> <a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
							}
							?>
						</ul>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<ul class="list-unstyled quick-links">
							<h1 style="color: white; ">| Quick links</h1>

							<?php
							$categories = get_categories(); // Lấy danh sách danh mục
							foreach ($categories as $category) {
								echo '<li><i class="fa fa-angle-double-right" style="color: white;"></i> <a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
							}
							?>
						</ul>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<ul class="list-unstyled quick-links">
							<h1 style="color: white; ">| Quick links</h1>

							<?php
							$categories = get_categories(); // Lấy danh sách danh mục
							foreach ($categories as $category) {
								echo '<li><i class="fa fa-angle-double-right" style="color: white;"></i> <a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
							}
							?>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
						<ul class="list-unstyled list-inline social text-center">
							<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fab fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fab fa-twitter"></i></a></li>
<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fab fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fab fa-google-plus-g"></i></a></li>
							<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fas fa-envelope"></i></a></li>
						</ul>
					</div>
					<hr>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
						<p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> là một MSP/ISO đã đăng ký của Elavon, Inc. Georgia [là công ty con hoàn toàn thuộc sở hữu của U.S. Bancorp, Minneapolis, MN]</p>
						<p class="h6">© Tất cả các quyền được bảo lưu.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
					</div>
					<hr>
				</div>
			</div>
		</section>
	</footer><!-- #site-footer -->

	<?php wp_footer(); ?>

	</body>

	</html>