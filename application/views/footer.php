<footer class="page_footer text-center text-md-left ds ms s-pt-65 s-pt-lg-125 s-pb-lg-35 c-gutter-40 main-footer">
	<div class="container">
		<div class="row">
			<div class="divider-20 d-none d-lg-block"></div>

			<div class="col-md-6 col-lg-3 animate" data-animation="fadeInUp">

				<div class="widget widget_icons_list">
					<a href="index.html" class="logo">
						<img src="<?php echo base_url('assets/images/'.$rows['favicon']) ?>" alt="">
						<span class="logo-text fw-500"><?php echo $rows['nama_website'] ?></span>
					</a>
					<div class="media side-icon-box">
						<div class="icon-styled color-main">
							<i class="fa fa-map-marker"></i>
						</div>
						<p class="media-body color-grey">
							<?php echo $rows['alamat_perusahaan'] ?>  <?php echo $rows['kota'] ?> <?php echo $rows['provinsi'] ?> <b><?php echo $rows['kodepos'] ?></b>
						</p>
					</div>
					<div class="media side-icon-box">
						<div class="icon-styled color-main">
							<i class="fa fa-phone"></i>
						</div>

						<p class="media-body color-grey"><?php echo $rows['no_telphone'] ?></p>
					</div>
					<div class="media side-icon-box">
						<div class="icon-styled color-main">
							<i class="fa fa-envelope"></i>
						</div>
						<p class="media-body color-grey">
							<a href="mailto:"><?php echo $rows['email'] ?></a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-3 animate order-md-3 order-lg-2" data-animation="fadeInUp">
				<div class="widget widget_page_links">
					<h3>Useful Pages</h3>
					<ul>
						<li>
							<a href="#"><i class="ico-check-circle"></i>Contact Us</a>
						</li>
						<li>
							<a href="#"><i class="ico-check-circle"></i>Blog post</a>
						</li>
						<li>
							<a href="#"><i class="ico-check-circle"></i>About Us</a>
						</li>
						<li>
							<a href="#"><i class="ico-check-circle"></i>Services</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-md-6 col-lg-3 animate order-md-4 order-lg-3" data-animation="fadeInUp">
				<div class="widget widget_services_links">
					<h3>Services</h3>
					<ul>
						<li>
							<a href="#"><i class="ico-check-circle"></i>Exterior Hand Wash</a>
						</li>
						<li>
							<a href="#"><i class="ico-check-circle"></i>Tower Hand Dry</a>
						</li>
						<li>
							<a href="#"><i class="ico-check-circle"></i>Tire Dressing</a>
						</li>
						<li>
							<a href="#"><i class="ico-check-circle"></i>Wheel Shine</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-md-6 col-lg-3 c-gutter-10 animate order-lg-4" data-animation="fadeInUp">
				<div class="widget widget_working_hours">
					<h3>Jam Kerja</h3>
					<ul>
						<li class="row">
							<div class="color-grey col-3">
								Sn-Jm
							</div>
							<div class="col-md-9 col-5">
								<span class="color-darkgrey">08.<sup>00</sup> - 16.<sup>00</sup>wib</span>
							</div>
						</li>
						<li class="row">
							<div class="color-grey col-3">
								Sab
							</div>
							<div class="col-md-9 col-5">
								<span class="color-darkgrey">08.<sup>00</sup> - 12.<sup>00</sup>wib</span>
							</div>
						</li>
						<li class="row">
							<div class="color-grey col-3">
								Min
							</div>
							<div class="col-md-9 col-5">
								<span class="color-darkgrey">Libur</span>
							</div>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</footer>