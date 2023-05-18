<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bundn
 */

get_header();
?>
<div class="col-md-9">
<main id="primary" class="site-main">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php
				the_archive_title('<h1 class="page-title">', '</h1>');
				the_archive_description('<div class="archive-description">', '</div>');
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post();
			?>
				<div class="row">
					<div class="col-md-5">
						<?php bundn_post_thumbnail(); ?>
					</div>
					<div class="col-md-7">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<?php
								if (is_singular()) :
									the_title('<h1 class="entry-title">', '</h1>');
								else :
									the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
								endif;

								if ('post' === get_post_type()) :
								?>
									
								<?php endif; ?>
							</header><!-- .entry-header -->



							<div class="entry-content">
								<?php
								// the_content(
								// 	sprintf(
								// 		wp_kses(
								// 			/* translators: %s: Name of current post. Only visible to screen readers */
								// 			__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'bundn'),
								// 			array(
								// 				'span' => array(
								// 					'class' => array(),
								// 				),
								// 			)
								// 		),
								// 		wp_kses_post(get_the_title())
								// 	)
								// );
								the_excerpt();
								wp_link_pages(
									array(
										'before' => '<div class="page-links">' . esc_html__('Pages:', 'bundn'),
										'after'  => '</div>',
									)
								);
								?>
							</div><!-- .entry-content -->

							<footer class="entry-footer">
								<?php bundn_entry_footer(); ?>
							</footer><!-- .entry-footer -->
						</article><!-- #post-<?php the_ID(); ?> -->
					</div>
				</div>
		<?php
			endwhile;



		endif;
		?>

	</main><!-- #main -->
</div>
	<div class="col-md-3">
	<?php get_sidebar(); ?>
	</div>

<?php
get_footer();
