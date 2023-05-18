<?php

/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="container">
	<div class="row">

		<?php
		$args = array(
			'category_in' => array(9),
			'post_type' => 'du_an',
			// 'posts_per_page' => 6,
		);
		$my_query = new WP_Query($args);
		if ($my_query->have_posts()) {
			while ($my_query->have_posts()) {
				$my_query->the_post();
				echo '<div class="col-12 box-item-duan"><div class="row"><div class="col-4"><a href="http://localhost/wp25/du-an/"';
				// echo get_post_permalink();
				echo '">';
				// echo get_the_content();
				echo get_the_post_thumbnail();
				echo '</a></div><div class="col-8">
                                      <div class="box-title-link"><a class="title-link" href="http://localhost/wp25/du-an/">';
				echo get_the_title();
				echo '</a></div><div>';
				echo get_the_excerpt();
				echo '</div><a class="xemchitiet" href="">XEM CHI TIẾT -></a></div></div></div>';
			}
		} else {
		}
		wp_reset_postdata();
		?>
		<!--  -->
	</div>
</div>

</main><!-- #main -->
</div>
<div class="col-3">
	<?php get_sidebar(); ?>
</div>



<?php get_footer(); ?>