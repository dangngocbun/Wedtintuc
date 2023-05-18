<?php

/**
 *Template Name: Tintuc
 */
get_header();
?>
<style>
    .box-tintuc {
        height: auto;
    }

    .bg-banner-tintuc {
        background-image: url(https://procons.com.vn/wp-content/uploads/2022/10/scene-victoria-harbour-hong-kong-victoria-harbour-scaled.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position-y: -300px;
        height: 400px;
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

    .box-tintuc {
        height: auto;
    }
</style>
</div>
<div class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-banner-tintuc">
                <div class="overlay"></div>
                <div class="title-banner">
                    <h1>TIN TỨC</h1>
                    <p><a href="http://localhost/wordpress/">Home</a> >>TIN TỨC</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="tintuc">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tinTuc">
                    <div class="row" style="justify-content: center;">
                        <?php
                        $args = array(
                            'category_in' => array(10),
                            'post_type' => 'post',
                            'posts_per_page' => 6,
                        );
                        $my_query = new WP_Query($args);
                        if ($my_query->have_posts()) {
                            while ($my_query->have_posts()) {
                                $my_query->the_post();
                                echo '<div class="col-lg-3 col-md-3 col-sm-6 box-tintuc">
										<div class="box-img"><a href=""';
                                echo get_post_permalink();
                                echo '">';
                                // echo get_the_content();
                                echo get_the_post_thumbnail();
                                echo '</a></div>
										<div class="box-content">
										<div class="box-title"><a href="'.get_the_permalink().'">';
                                echo get_the_title();
                                echo '</a></div><div class="nd-sub-content">';
                                echo get_the_excerpt();
                                echo '</div></div></div>';
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
        <!-- -->


        <?php
        get_footer();
