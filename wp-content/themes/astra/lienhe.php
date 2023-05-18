<?php

/**
 *Template Name: Lienhe
 */
get_header();
?>
<style>
    .bg-banner-lienhe {
        background-image: url(https://procons.com.vn/wp-content/uploads/2022/10/contact-cover-scaled-1.jpg);
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

    .form-lienhe {
        text-align: center;
        margin: 50px 0;
    }

    .form-lienhe h1 {
        margin: 30px 0;
        font-size: 30px;
        font-weight: 600;
        color: #282a56;
        font-family: 'Roboto', sans-serif;
    }

    .form-lienhe p {
        margin: 30px 0 50px 0;
        font-size: 15px;
        font-weight: 400;
        color: #7a7a7a;
        font-family: 'Roboto', sans-serif;
    }

    .form-control,
    .form-control-text {
        width: 80%;
        margin: 15px auto;
        height: 50px;
        padding: 10px !important;
        border: 1px solid #000 !important;
    }

    .form-control-text {
        height: 100px;
        margin: 0;
    }

    .button-submit-lienhe{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .button-submit-lienhe button{
        width: 73px;
        border-radius: 5px;
        background-color: #282A56;
        color: #fff;
        font-weight: 500;
    }
</style>
<div class="banner" style="width: 100%;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-banner-lienhe">
                <div class="overlay"></div>
                <div class="title-banner">
                    <h1>TIN TỨC</h1>
                    <p><a href="http://localhost/wordpress/">Home</a> >> Tin Tức</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="" method="post" class="form-lienhe">
                <h1>THÔNG TIN LIÊN HỆ</h1>
                <p>Vui lòng điền đầy đủ thông tin, chúng tôi sẽ sớm liên hệ với bạn !</p>
                <input type="text" name="" class="form-control" placeholder="Họ Và Tên">
                <input type="text" name="" class="form-control" placeholder="Số Điện Thoại">
                <input type="text" name="" class="form-control" placeholder="Email">
                <textarea name="" class="form-control-text" cols="30" rows="10" placeholder="Nội Dung"></textarea>
                <div class="button-submit-lienhe">
                    <button type="submit" value="Gửi">Gửi</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
get_footer();