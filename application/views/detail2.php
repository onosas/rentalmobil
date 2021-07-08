<?php include "breadcrumb.php"; ?>

<section class="ls s-pt-60 s-pb-30 s-py-lg-100 s-py-xl-150 c-gutter-60 c-mb-30 c-mb-lg-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-2">
				<center>
					<h2><?php echo $row['nama_merk'] ?>&nbsp;<?php echo $row['nama_mobil'] ?></h2>
				</center>
			</div>
			<div class="col-md-7">
				<div class="mb-40">
					<img src="<?php echo base_url('assets/foto_mobil/'.$row['foto']) ?>" alt="">
				</div>


				<p class="excerpt">
					<?php  
						$cab = $this->db->query("SELECT * FROM gallery a JOIN mobil b ON a.id_mobil=b.id_mobil WHERE a.kriteria='Cabin' ORDER BY a.id_gallery")->row_array();
						if ($cab = ['id_mobil'] == $row['id_mobil']) {
							$pilih = $row['kriteria'];
						}else{
							$pilih = $row['kriteria'];
						}
					?>
					INTERIOR <?php echo $pilih; ?>
				</p>

				<p>
					<?php  
						$cab = $this->db->query("SELECT * FROM gallery a JOIN mobil b ON a.id_mobil=b.id_mobil WHERE a.kriteria='Cabin' ORDER BY a.id_gallery")->row_array();
						if ($cab = ['id_mobil'] == $row['id_mobil']) {
							$foto = $row['foto_gallery'];
						}else{
							$foto = $row['foto_gallery'];
						}
					?>
					<img src="<?php echo base_url('assets/img_gallery/'.$foto) ?>" alt="">
				</p>
				<p>
					<?php  
						$cab = $this->db->query("SELECT * FROM gallery a JOIN mobil b ON a.id_mobil=b.id_mobil WHERE a.kriteria='Cabin' ORDER BY a.id_gallery")->row_array();
						if ($cab = ['id_mobil'] == $row['id_mobil']) {
							$ket = $row['keterangan'];
						}else{
							$ket = $row['keterangan'];
						}
					?>
					<?php echo $ket; ?>
				</p>
				<hr>
				<p class="excerpt">
					<?php  
						$kur = $this->db->query("SELECT * FROM gallery a JOIN mobil b ON a.id_mobil=b.id_mobil WHERE a.kriteria='Kursi'")->row_array();
						if ($row = ['id_mobil'] == $kur['id_mobil']) {
							$kursi = $kur['kriteria'];
						}else{
							$kursi = $kur['kriteria'];
						}
					?>
					INTERIOR <?php echo $kursi; ?>
				</p>
				<p>
					<?php  
						$kur = $this->db->query("SELECT * FROM gallery WHERE kriteria='Kursi' AND id_mobil='".$row['id_mobil']."'")->row_array();
						if ($row = ['id_mobil'] == $kur['id_mobil']) {
							$gbr = $kur['foto_gallery'];
						}else{
							$gbr = $kur['foto_gallery'];
						}
					?>
					<img src="<?php echo base_url('assets/img_gallery/'.$kur['foto_gallery']) ?>" alt="">
				</p>
				<p>
					<?php  
						$kur = $this->db->query("SELECT * FROM gallery a JOIN mobil b ON a.id_mobil=b.id_mobil WHERE a.kriteria='Kursi'")->row_array();
						if ($row = ['id_mobil'] == $kur['id_mobil']) {
							$ktr = $kur['keterangan'];
						}else{
							$ktr = $kur['keterangan'];
						}
					?>
					<?php echo $ktr; ?>
				</p>


			</div>
			<div class="col-md-5 service-tab">

				<div id="accordion01" class="accordion ls ms" role="tablist">
					<?php  
					$rows = $this->produk->detail_produk($id)->row_array();
					?>
					<div class="card">
						<div class="card-header" role="tab" id="collapse01_header">
							<h6>
								<a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
									<i class="color-main ico-motorcycle"></i>
									<?php echo $rows['nama_mobil']; ?>
								</a>
							</h6>
						</div>

						<div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
							<div class="card-body">

								<div class="media align-items-center">
									<div class="media-left">
										<a href="#">
											<img src="images/gallery/01.jpg" alt="">
										</a>
									</div>
									<div class="media-body">
										<?php echo $rows['nama_mobil'] ?>.
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header" role="tab" id="collapse02_header">
							<h6>
								<a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
									<i class="color-main ico-car-alt"></i>
									Nopol
								</a>
							</h6>
						</div>
						<div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-left">
										<a href="#">
											<img src="images/gallery/02.jpg" alt="">
										</a>
									</div>
									<div class="media-body">
										<?php echo $rows['nopol'] ?>.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="collapse03_header">
							<h6>
								<a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
									<i class="color-main ico-breakdown"></i>
									Tahun
								</a>
							</h6>
						</div>

						<div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
							<div class="card-body">

								<div class="media align-items-center">
									<div class="media-left">
										<a href="#">
											<img src="images/gallery/03.jpg" alt="">
										</a>
									</div>
									<div class="media-body">
										<?php echo $rows['tahun'] ?>.
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header" role="tab" id="collapse04_header">
							<h6>
								<a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
									<i class="color-main ico-car"></i>
									Warna
								</a>
							</h6>
						</div>
						<div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-left">
										<a href="#">
											<img src="images/gallery/04.jpg" alt="">
										</a>
									</div>
									<div class="media-body">
										<?php echo $rows['warna'] ?>.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header" role="tab" id="collapse05_header">
							<h6>
								<a class="collapsed" data-toggle="collapse" href="#collapse05" aria-expanded="false" aria-controls="collapse05">
									<i class="color-main ico-accident"></i>
									Harga Rental
								</a>
							</h6>
						</div>
						<div id="collapse05" class="collapse" role="tabpanel" aria-labelledby="collapse05_header" data-parent="#accordion01">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-left">
										<a href="#">
											<img src="images/gallery/06.jpg" alt="">
										</a>
									</div>
									<div class="media-body">
										<?php echo $rows['hrg_rental'] ?>.
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>


				<div class="my-30 ls ms p-30">
					<p class="icon-inline">
						<span class="icon-styled color-main">
							<i class="fa fa-map-marker"></i>
						</span>
						<span><?php echo $row['nama_mobil'] ?></span>
					</p>

					<p class="icon-inline">
						<span class="icon-styled color-main">
							<i class="fa fa-phone"></i>
						</span>
						<span>1(800) 123-12345</span>
					</p>

					<p class="icon-inline">
						<span class="icon-styled color-main">
							<i class="fa fa-pencil"></i>
						</span>
						<span>mail@example.com</span>
					</p>
				</div>

				<div class="ls ms p-30">
					<div class="form-group has-placeholder">
						<label for="name">Full Name <span class="required">*</span></label>
						<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
					</div>
					<div class="form-group has-placeholder">
						<label for="phone">Phone<span class="required">*</span></label>
						<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone">
					</div>
					<div class="form-group has-placeholder">
						<label for="email">Email address<span class="required">*</span></label>
						<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
					</div>
					<div class="form-group has-placeholder">
						<label for="message">Message</label>
						<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
					</div>
					<button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor mt-20">Booking Sekarang
					</button>
				</div>
			</div>
		</div>
	</div>
</section>