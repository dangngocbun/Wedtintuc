<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bundn
 */

get_header();
?>
<div id="slider">
	<div class="container">
		<div class="row">
			<div class="col-3">
			<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
			</div>
		</div>
	</div>
</div>
\<div id="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-6 gioithieu-box">
				<div class="gioithieu">
					<div class="tieude">
						<h3>GIỚI THIỆU</h3>
						<h1>PROCONS</h1>
					</div>
					<?php
					$args = array(
						'category__in' => array(10),
						'posts_per_page' => 6,
					);
					$my_query = new WP_Query($args);
					if ($my_query->have_posts()) {
						while ($my_query->have_posts()) {
							$my_query->the_post();
							echo '<div class="col-md-6 box-gioithieu">
										<div class="box-content">
										<div class="title-content">';
							echo get_the_title();
							echo '</div><div class="nd-content">';
							echo get_the_content();
							echo '<div class="submit-button">
										<button><a href=".echo get_the_permalink();.">Xem Chi Tiet</a> </button>
										</div></div></div>';
						}
					} else {
					}
					wp_reset_postdata();



					?>



				</div>


			</div>
		</div>
		<div class="col-md-6 sub-boxgioithieu">
			<div class="container box-item">
				<div class="row box-item-row">
					<div class="col-4 img-box">
						<img src="https://procons.com.vn/wp-content/uploads/2022/10/img2.png" alt="">
					</div>
					<div class="col-4 img-box">
						<img src="https://procons.com.vn/wp-content/uploads/2022/10/213.png" alt="">
					</div>
					<div class="col-4 img-box">
						<img src="https://procons.com.vn/wp-content/uploads/2022/10/img1.png" alt="">
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
</div>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
