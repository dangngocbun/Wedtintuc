<?php

/**
 *  Template Name: Trangchu
 */
get_header();
?>

<div id="slider">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php
echo do_shortcode('[smartslider3 slider="3"]');
?>
            </div>
        </div>
    </div>
</div>
</div>
<div id="gioithieu">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-sm-12">
                <div class="gioithieu">
                    <div class="tieude">
                        <h3>GIỚI THIỆU</h3>
                        <h1><b>PROCONS</b></h1>
                    </div>
                    <?php
                    $args = array(
                        'category__in' => array(12),
                        'posts_per_page' => 6,
                    );
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            echo '<div class="col-lg-4 col-md-6 col-sm-6 box-gioithieu">
									<div class="box-content">
										<div class="title-content">';
                            echo get_the_title();
                            echo '</div><div class="nd-content">';
                            echo get_the_content();
                            echo '<div class="submit-button">
									<button><a href="http://localhost/wp25/gioi-thieu/">Về Chúng Tôi</a></button>
									</div></div></div>';
                        }
                    } else {
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-sm-12">
            <div class="container box-item">
                <div class="row box-item-row">
                    <div class="col-4 image">
                        <img src="https://procons.com.vn/wp-content/uploads/2022/10/img2.png" alt="">
                    </div>

                    <div class="col-4 image">
                        <img src="https://procons.com.vn/wp-content/uploads/2022/10/213.png" alt="">
                    </div>

                    <div class="col-4 image">
                        <img src="https://procons.com.vn/wp-content/uploads/2022/10/img1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="duAnNoiBat">
	<div class="container-fluid">
		<div class="row">
			<h1 class="title-duan">Dự Án Nổi Bật</h1>
			<div class="col-12">
				<?php echo do_shortcode('[logocarousel id="209"]'); ?>
			</div>
		</div>
	</div>
</div>
    <div id="tintuc">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tinTuc">
                        <h1 class="titleTintuc">TIN TỨC</h1>
                        <div class="row" style="justify-content: center;">
                            <?php
                            $args = array(
                                'category_in' => array(19),
                                'post_type' => 'post',
                                'posts_per_page' => 6,
                            );
                            $my_query = new WP_Query($args);
                            if ($my_query->have_posts()) {
                                while ($my_query->have_posts()) {
                                    $my_query->the_post();
                                    echo '<div class="col-lg-3 col-md-3 col-sm-6 box-tintuc">
										<div class="box-img"><a href="';
                                    echo get_post_permalink();
                                    echo '">';
                                    // echo get_the_content();
                                    echo get_the_post_thumbnail();
                                    echo '</a></div>
										<div class="box-content">
										<div class="box-title"><a href="">';
                                    echo get_the_title();
                                    echo '</a></div><div class="nd-sub-content">';
                                    echo get_the_excerpt();
                                    echo '</div><div class="button-tintuc">
										<button><a  href="'.get_the_permalink().'">XEM CHI TIẾT -></a></button>
										</div></div></div>';
                                }
                            } else {
                            }
                            wp_reset_postdata();
                            ?>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -->



    <?php
    get_footer();
