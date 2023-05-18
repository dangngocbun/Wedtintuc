<?php

/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

get_header();
?>
<style>
	
	.bg-banner-duan {
        background-image: url(https://procons.com.vn/wp-content/uploads/2022/10/z3779073705860_38aebad1f40214ef4ac254c5a3659cf6.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 510px;
        width: 100%;
        position: relative;
        padding: 0;
    }

    .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #0009804D;
    }

    .sesscion-link {
        background-color: #282a56;
        margin-bottom: 20px;
    }

    .sesscion-link ul {
        line-height: 52px;
        margin: 0;
    }

    .sesscion-link ul li {
        display: inline-block;
        margin-right: 20px;
    }

    .sesscion-link ul li a {
        font-size: 13px;
        font-weight: 500;
        font-family: "Bai Jamjuree", sans-serif;
        text-decoration: none;
        color: #fff;
    }

    .sesscion-link ul li:hover a {
        color: #ffa600;
    }

    /* item dự án */
    .box-item-duan {
        margin: 10px 0;
        border: 1px solid #ccc;
    }

    .box-item-duan .col-4 {
        padding: 0;
    }

    .box-item-duan p {
        font-size: 15px;
        font-weight: 400;
        color: #000;
    }

    .box-title-link {
        margin: 20px 0;
    }

    .title-link {
        font-size: 25px;
        font-family: "Bai Jamjuree", sans-serif;
        font-weight: 600;
        color: #0170B9 !important;
        text-decoration: none;
    }

    .box-item-duan .xemchitiet {
        color: #ffcc3f;
        transition: all 1s;
        border-bottom: 2px solid #ffcc3f;
    }

    .box-item-duan .xemchitiet:hover {
        color: #ffa600;
        font-size: 20px;
    }
</style>
<div class="banner" style="width: 100%;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-banner-duan">
                <div class="overlay"></div>
                <div class="title-banner">
                    <h1>BIỆT THỰ, NHÀ PHỐ</h1>
                    <p><a href="http://localhost/wp/">Home</a> >Dự án> Biết thự, Nhà Phố</p>
                </div>
            </div>
            <div class="col-12 sesscion-link">
                <div class="container">
                    <div class="row">
                        <ul>
                        <?php
                            $args = array(
                                'taxonomy' => 'danh_muc_du_an',    
                                'hide_empty' => 0,
                                'number' => '5',
                                'exclude' => '38',
                            );
                            $categories = get_categories( $args );
                            foreach ( $categories as $category ) { ?>
                                <li class="link-singer">
                                    <a class="link-singer" style="text-transform: uppercase;" href="<?php echo get_term_link($category->slug, 'danh_muc_du_an'); ?>"><?php echo $category->cat_name ; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php
                    $args = array( 'post_type' => 'du_an', 'post__in' => array( 169, 44 ));
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            echo '<div class="col-12 box-item-duan"><div class="row"><div class="col-4"><a href="';
                            echo get_post_permalink();
                            echo '">';
                            // echo get_the_content();
                            echo get_the_post_thumbnail();
                            echo '</a></div><div class="col-8">
                                      <div class="box-title-link"><a class="title-link" href="';
							echo get_post_permalink();
							echo '">';
                            echo get_the_title();
                            echo '</a></div><div>';
                            echo get_the_excerpt();
                            echo '</div><a class="xemchitiet" href="'.get_the_permalink().'">XEM CHI TIẾT -></a></div></div></div>';
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



<?php

get_footer();
