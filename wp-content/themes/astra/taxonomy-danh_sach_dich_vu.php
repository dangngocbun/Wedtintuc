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
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

    * {
        font-family: 'Roboto', sans-serif;
    }

    .bg-banner-dichvu {
        background-image: url(https://procons.com.vn/wp-content/uploads/2022/10/dich-vu-scaled.jpg);
        background-repeat: no-repeat;
        height: 600px;
        width: 100%;
        background-position-y: -400px;
        background-position-x: -900px;
        position: relative;
        padding: 0;
    }

    .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #0009804D;
    }

    .content-dichvu {
        display: flex;
        flex-direction: column;
        padding: 10px;
    }

    .box-dichvu-img {
        overflow: hidden;
        padding: 0;
    }

    .box-dichvu-img img {
        width: 100%;
        display: block;
        transform: scale(1);
        transition: 1.5s;
        z-index: 1;
        height: 100%;
    }

    .box-dichvu:hover {
        box-shadow: 0 0 10px 10px #ccc;
    }

    .box-dichvu:hover img {
        transform: scale(1.2);
    }

    .box-dichvu {
        padding: 10px;
        border: 1px solid #000;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .box-content-dichvu {
        padding: 35px;
    }


    .box-content-dichvu h1 {
        font-size: 25px;
        font-weight: 600;
        text-align: center;
        color: #3e449c;
    }

    .box-content-dichvu h1 a {
        text-decoration: none;
        font-size: 25px;
        font-weight: 600;
        text-align: center;
        color: #3e449c;
    }

    .box-content-dichvu p {
        text-align: center;
        font-weight: 400;
        font-size: 15px;
        color: #55595c;
        line-height: 2.2;
    }

    .box-content-dichvu button {
        width: 126px;
        height: 37px;
        background-color: #3e449c;
        color: #fff;
        padding: 10px 20px;
        font-size: 13px;
        font-weight: 500;
        border-radius: 5px;
    }


    .tuvandichvu {
        padding: 10px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        top : -1618px;
    }

    .tuvandichvu .form-tuvan {
        position: absolute;
        width: 100%;
    }

    .tuvandichvu h1 {
        font-size: 30px;
        font-weight: 600;
        margin-bottom: 20px;
        color: #282a56;
        text-align: center;
    }

    .tuvandichvu input {
        width: 100%;
        height: 46px;
        margin-bottom: 10px;
    }

    .tuvandichvu textarea {
        width: 315px;
        height: 96px;
        margin-bottom: 20px;
    }

    .tuvandichvu .button-submit {
        display: flex;
        justify-content: center;
    }

    .tuvandichvu .button-submit button {
        width: 74px;
        height: 40px;
        background-color: #282a56;
        color: #fff;
        border-radius: 5px;
        font-weight: 500;
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
            <div class="col-12 bg-banner-dichvu">
                <div class="overlay"></div>
                <div class="title-banner">
                    <h1>DỊCH VỤ</h1>
                    <p><a href="http://localhost/wp25/">Home</a> >> Dịch Vụ</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row">
        <?php
        $args = array(
            'category_in' => array(20),
            'post_type' => 'dich_vu',
            // 'posts_per_page' => 6,
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) {
            while ($my_query->have_posts()) {
                $my_query->the_post();
                echo '<div class="col-9 content-dichvu">
                <div class="box-dichvu">
                    <div class="container">
                        <div class="row"><div class="col-6 box-dichvu-img"><a href="';
                echo get_post_permalink();
                echo '">';
                // echo get_the_content();
                echo get_the_post_thumbnail();
                echo '</a></div><div class="col-6 box-content-dichvu">
                                      <div class="box-title-link"><a class="title-link" href="';
                echo get_post_permalink();
                echo '">';
                echo get_the_title();
                echo '</a></div><div>';
                echo get_the_excerpt();
                echo '</div><div style="display: flex; justify-content: center;"><a href="';
                echo get_post_permalink();
                echo '">';
                echo '<button><a class="xemchitiet" href="'.get_the_permalink().'">XEM CHI TIẾT -></a></button></a></div></div></div></div></div></div>';
            }
        } else {
        }
        wp_reset_postdata();
        ?>
            <div class="col-3 tuvandichvu">
                <form action="" method="post" class="form-tuvan">
                    <h1>TƯ VẤN DỊCH VỤ</h1>
                    <input type="text" name="" class="form-control" placeholder="Họ Và Tên">
                    <input type="text" name="" class="form-control" placeholder="Số Điện Thoại">
                    <input type="text" name="" class="form-control" placeholder="Email">
                    <textarea name="" class="form-control" cols="30" rows="10" placeholder="Nội Dung"></textarea>
                    <div class="button-submit">
                        <button type="submit" value="Gửi">Gửi</button>
                    </div>
                </form>
            </div>
    </div>
</div>
    <?php


get_footer();
