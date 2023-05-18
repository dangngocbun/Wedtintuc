<?php

/**
 *Template Name: GioiThieu
 */

get_header();
?>

<div class="banner" style="width: 100%;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-banner">
                <div class="overlay"></div>
                <div class="title-banner">
                    <h1>GIỚI THIỆU</h1>
                    <p><a href="http://localhost/procons.wp/">Home</a> >> <a href="http://localhost/procons.wp/gioi-thieu/">Giới thiệu</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="tongquan">
    <div class="container secsion">
        <div class="row title-tongquan">
            <h3>TỔNG QUAN</h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-tongquan">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <img src="https://procons.com.vn/wp-content/uploads/2022/10/procons1.png" alt="">
                        </div>
                        <div class="col-6">
                            <div class="box-content-gioithieu">
                            <div class="box-content-tong_quan">
                            <?php $values = get_field('tong_quan');?>
								<div class="box-tongquan-content">
								<?php echo $values['noi_dung'];?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="gachchia"></div>
        </div>
    </div>
</div>
<div class="tamNhin">
    <div class="container secsion">
        <div class="row title-tongquan">
            <h3>TẦM NHÌN - GIÁ TRỊ CỐT LÕI</h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-tamnhin">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="box-content-tamnhin">
                            <?php $values = get_field('tam_nhin');?>
								<div class="box-tamnhin-content">
								<?php echo $values['noi_dung'];?>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <img src="<?php echo $values['anh_dai_dien'];?>" alt=""></div>  
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="khachhang">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="gachchia"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="gachchia"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row title-khachhang">
            <h3>KHÁCH HÀNG & ĐỐI TÁC</h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                    <?php $values = get_field('khach_hang');?>
                        <div class="col-2 item">
                            <div class="item-khachhang"><a href="https://www.nettruyenvt.com/"><img src="<?php echo $values['khach_hang'];?>" alt=""></a></div>
                        </div>
                        <div class="col-2 item">
                        <div class="item-khachhang"><a href=""><img src="<?php echo $values['khach_hang_1'];?>" alt=""></a></div>
                        </div>
                        <div class="col-2 item">
                        <div class="item-khachhang"><a href=""><img src="<?php echo $values['khach_hang_2'];?>" alt=""></a></div>
                        </div>
                        <div class="col-2 item">
                        <div class="item-khachhang"><a href=""><img src="<?php echo $values['khach_hang_3'];?>" alt=""></a></div>
                        </div>
                        <div class="col-2 item">
                        <div class="item-khachhang"><a href=""><img src="<?php echo $values['khach_hang_4'];?>" alt=""></a></div>
                        </div>
                        <div class="col-2 item">
                        <div class="item-khachhang"><a href=""><img src="<?php echo $values['khach_hang_5'];?>" alt=""></a></div>
                        </div>
                        <div class="col-2 item">
                        <div class="item-khachhang"><a href=""><img src="<?php echo $values['khach_hang_6'];?>" alt=""></a></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="gachchia"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="gachchia"></div>
            </div>
        </div>
    </div>
</div>
<div class="sodo"></div>
<div class="container">
    <div class="row title-khachhang">
        <h3>SƠ ĐỒ TỔ CHỨC</h3>
    </div>
</div>
<div class="container">

    <div class="row">
    <?php $values = get_field('so_do');?>	
        <div class="col-12">		
		<img src="<?php echo $values['anh_dai_dien'];?>" alt="">
    </div>
</div>
</div>
<?php
// get_sidebar();
get_footer();
