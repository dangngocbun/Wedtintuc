<?php

/**
 *Template Name: Tuyendung
 */
get_header();
?>
<style>
	.bg-banner-tuyendung {
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
    h3{
        align-content: center;
    }
</style>
<div class="banner" style="width: 100%;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 bg-banner-tuyendung">
				<div class="overlay"></div>
				<div class="title-banner">
					<h1>TUYỂN DỤNG</h1>
					<p><a href="http://localhost/wordpress/">Home</a>Tin Tức >> Tuyển Dụng</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
get_footer();