<section class="ds s-pt-60 s-pt-md-5 s-pb-0 s-pb-md-15 s-pb-lg-150 choose-us-section c-gutter-10 overflow-visible" id="choose-us">
	<div class="container">
		<div class="row plan-content c-mt-0 c-mt-lg-10 c-mt-xl-0">
			<?php  
					foreach ($mobil->result_array() as $car) {
						if ($car['nama_merk'] == 'Honda') {
							$mob = 'plan1';
						}elseif ($car['nama_merk'] == 'Toyota') {
							$mob = 'plan2';
						}elseif ($car['nama_merk'] == 'Suzuki') {
							$mob = 'plan3';
						}elseif ($car['nama_merk'] == 'Mitsubishi') {
							$mob = 'plan4';
						}elseif ($car['nama_merk'] == 'Daihatsu') {
							$mob = 'plan1';
						}else{

						}
			?>
			<div class="col-xl-4 col-md-8 mt-4">
				<div class="pricing-plan <?php echo $mob; ?> cs">
					<div class="plan-name">
						<h5 class="text-uppercase">
							<?php echo $car['nama_merk']; ?><br><?php echo $car['nama_mobil']; ?>
						</h5>
					</div>
					<div class="plan-description">
						<img style="width: 100%;" src="<?php echo base_url('assets/foto_mobil/'.$car['foto']) ?>">
					</div>
					<div class="price-wrap color-main2">
						<!-- <span class="plan-price">IDR</span> -->
						<span style="font-size: 40px;" class="plan-sign"><?php echo idr_format($car['hrg_rental']); ?></span>

					</div>
					<div class="plan-features">
						<ul>
							<li><i class="ico-check fs-12 fw-900"></i><?php echo $car['nopol'] ?></li>
							<li><i class="ico-check fs-12 fw-900"></i><?php echo $car['tahun'] ?></li>
							<li><i class="ico-check fs-12 fw-900"></i><?php echo $car['warna'] ?></li>
						</ul>
						<a href="<?php echo base_url('home/detail/'.$car['id_mobil']); ?>" class="btn btn-small btn-outline-maincolor btn-appointment">Lihat Detail</a>
					</div>
				</div>
			</div><div></div>
			<?php } ?>
			<div class="divider-145 d-none d-lg-block"></div>
		</div>
		<div class="row c-mb-45 c-mb-lg-0">
			<div class="divider-40 d-block d-lg-none"></div>
			<div class="offset-lg-2 col-lg-8 item-content text-center">
				<h3 class="special-heading text-center">Mengapa<span class="text-gradient">Memilih</span> Kami</h3>
				<p class="fs-20 color-dark">Rental Mobil</p>
				<div class="divider-60 d-none d-lg-block"></div>
				<p>Autospa Hand Wash is an eco-friendly, hand car wash and detailing service based in Portland. Our company was founded back in 2005 by a team of experts with more then 10 years of professional car wash experience.</p>
				<p>Our goal is to provide our customers with the friendliest, most convenient hand car wash experience possible. We use the most modern and up-to-date.</p>
				<div class="row text-left c-gutter-60">
					<div class="divider-35"></div>
					<div class="col-md-4">
						<div class="icon-box text-center">
							<div class="icon-styled color-main2 fs-40">
								<i class="ico-mechanic"></i>
							</div>
							<p>
								Kami menawarkan banyak layanan dengan nilai yang luar biasa
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="icon-box text-center">
							<div class="icon-styled color-main2 fs-40">
								<i class="ico-car-wash"></i>
							</div>
							<p>
								Ada Varian & Jenis Mobil Tersedia
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="icon-box text-center">
							<div class="icon-styled color-main2 fs-40">
								<i class="ico-painting"></i>
							</div>
							<p>
								Murah & Harga Bersahabat
							</p>
						</div>
					</div>
				</div>
				<div class="divider-33 d-none d-lg-block"></div>
				<div>
					<a href="about.html" class="btn btn-small btn-maincolor">Read more</a> <span class="color-dark m-25">or</span> <a href="contact.html" class="btn btn-small btn-outline-maincolor">Get Started</a>
				</div>
			</div>
		</div>
		<div class="divider-50 d-none d-lg-block"></div>
	</div>
</section>