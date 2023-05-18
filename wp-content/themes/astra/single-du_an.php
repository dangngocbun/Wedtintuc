<?php

/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<style>
	/* Tu Van */
	.title-tuvan {
		text-align: center;
		font-size: 50px;
		text-transform: capitalize;
		font-weight: 700;
		margin-bottom: 30px;
		font-family: 'Bai Jamjuree',sans-serif;
	}

	.title-tuvan .item {
		height: 60px;
		border-top: 1px solid #3e449c;
		border-left: 1px solid #3e449c;
		border-right: 1px solid #3e449c;
		border-bottom: 2px solid #3e449c;
		border-radius: 10px;
		margin: 15px;
		width: 95%;
	}

	.title-tuvan .item p {
		line-height: 60px;
		margin: 0;
		font-size: 20px;
		font-weight: 500;
		color: #282a56;
		font-family: 'Roboto', sans-serif;
	}
</style>
<div id="slider">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php wd_slider(4); ?>
			</div>
		</div>
	</div>
</div>
</div>

<?php
while (have_posts()) :
	the_post();

	// get_template_part('template-parts/content', get_post_type());
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		if (is_singular()) :
			the_title('<h2 class="title-tuvan"' . esc_url(get_permalink()) . '" rel="bookmark">', '</h2>');

		else :
			the_title('<h2 class="title-tuvan" ' . esc_url(get_permalink()) . '" rel="bookmark">', '</h2>');
		endif;

		if ('post' === get_post_type()) :
		?>
		<?php endif; ?>
		<?php
		the_content(
			sprintf(
				wp_kses(
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', ''),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);
		?>
	</article><!-- #post-<?php the_ID(); ?> -->
<?php



// If comments are open or we have at least one comment, load up the comment template.
// if (comments_open() || get_comments_number()) :
// 	comments_template();
// endif;

endwhile; // End of the loop.
?>
<?php
// get_sidebar();
get_footer();
