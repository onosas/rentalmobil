<?php 
// $logo = $this->home->logo()->row_array();
$rows = $this->home->profile_perusahaan()->row_array();
?>
<section class="ls ms contact-section text-center text-md-left">
	<div class="row align-items-center c-gutter-0">
		<div class="col-xl-6 col-lg-6 col-md-6 col-xs-12">
			<div class="animate page_map animated scaleAppear" data-animation="scaleAppear">
				<div class="marker">
					<div class="marker-address"><?php echo $rows['alamat_perusahaan'] ?></div>
					<div class="marker-title">Map Marker</div>
					<div class="marker-description">
						<p class="strong"><strong><?php echo $rows['alamat_perusahaan'] ?></strong>.</p>
						<p>
							Lorem ipsum dolor sit amet,
							consectetur adipisicing elit. Aliquid cumque,
							deserunt dolor.
						</p>
					</div>
					<img class="marker-icon" src="<?php echo base_url('assets/template/') ?>images/map_marker_icon.png" alt="">P
				</div>
				<!-- .marker -->
			</div>
			<!--.col-* -->
		</div>
		<div class="col-xl-3 col-md-6 col-10 animate" data-animation="moveFromRight">
			<div class="divider-55 d-md-none"></div>
			<div class="item-content content-left-padding">
				<h3 class="special-heading">Find<span class="text-gradient">Us</span></h3>
				<p align="justify">Silahkan Hubungi Kami, jika ada yang anda tanyakan via online ataupun datang langsung ke kantor kami.</p>
				<h6 class="fw-700"><?php echo $rows['provinsi'] ?></h6>
				<div class="media side-icon-box">
					<div class="icon-styled color-main">
						<i class="fa fa-map-marker"></i>
					</div>
					<p class="media-body"><?php echo $rows['alamat_perusahaan'] ?><br> <?php echo $rows['kota'] ?>, <?php echo $rows['kodepos'] ?> </p>
				</div>
				<div class="media side-icon-box">
					<div class="icon-styled color-main">
						<i class="fa fa-phone"></i>
					</div>

					<p class="media-body"><?php echo $rows['no_telphone'] ?></p>
				</div>
				<div class="media side-icon-box">
					<div class="icon-styled color-main">
						<i class="fa fa-whatsapp"></i>
					</div>

					<p class="media-body"><?php echo $rows['whatsapp'] ?></p>
				</div>
				<div class="media side-icon-box">
					<div class="icon-styled color-main fs-14">
						<i class="fa fa-envelope"></i>
					</div>
					<p class="media-body links-grey">
						<a href="mailto:"><?php echo $rows['email'] ?></a>
					</p>
				</div>
				<a href="#" class="btn btn-small btn-outline-maincolor">Contact us</a>
			</div>
			<div class="divider-60 d-md-none"></div>
		</div>
		<!--.col-* -->
	</div>
</section>