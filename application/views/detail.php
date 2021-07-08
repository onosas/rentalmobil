
<section class="ls s-py-60 s-py-lg-100 s-py-xl-150 c-gutter-60">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center>
					<h2><?php echo $row['nama_merk'] ?>&nbsp;<?php echo $row['nama_mobil'] ?></h2>
					<h3 class="special-heading text-center mt--5">
						<span class="text-gradient">
							<?php echo currency_format($row['hrg_rental']) ?> / hari
						</span>
					</h3>
				</center>
				<hr>
			</div>

			<main class="col-lg-7 col-xl-8 mt-2">
				<div class="product">
					<img src="<?php echo base_url('assets/foto_mobil/'.$row['foto']) ?>" alt="">
					<!-- .summary -->

					<hr>
					<section class="up-sells upsells products">
						<?php  
							$cab = $this->db->query("SELECT * FROM gallery a JOIN mobil b ON a.id_mobil=b.id_mobil WHERE a.kriteria='Cabin' ORDER BY a.id_gallery")->row_array();
							if ($cab = ['id_mobil'] == $row['id_mobil']) {
								$foto = $row['foto_gallery'];
							}else{
								$foto = $row['foto_gallery'];
							}
						?>
						<div class="col-12 mb-60">
							<h3 class="special-heading text-center">Best<span class="text-gradient">Interrior</span></h3><br>
							<img src="<?php echo base_url('assets/img_gallery/'.$foto) ?>" alt="">
						</div>
						<div class="item-content">
							<center>
								<h2>Dashboard</h2>
								<div class="star-rating">
									<span style="width:80%">Rated <strong class="rating">5.00</strong> out of 5</span>
								</div>
								<span class="price">
									<?php  
										$cab = $this->db->query("SELECT * FROM gallery a JOIN mobil b ON a.id_mobil=b.id_mobil WHERE a.kriteria='Cabin' ORDER BY a.id_gallery")->row_array();
										if ($cab = ['id_mobil'] == $row['id_mobil']) {
											$ket = $row['keterangan'];
										}else{
											$ket = $row['keterangan'];
										}
									?>
									<span></span><?php echo $ket; ?>
								</span>
							</center>
						</div>
						<hr>
						<?php  
							$kur = $this->db->query("SELECT * FROM gallery WHERE kriteria='Kursi' AND id_mobil='".$row['id_mobil']."'")->row_array();
							if ($row = ['id_mobil'] == $kur['id_mobil']) {
								$gbr = $kur['foto_gallery'];
							}else{
								$gbr = $kur['foto_gallery'];
							}
						?>
						<div class="col-12 mb-60">
							<img src="<?php echo base_url('assets/img_gallery/'.$gbr) ?>" alt="">
						</div>
						<div class="item-content">
							<center>
								<h2>Kursi</h2>
								<div class="star-rating">
									<span style="width:80%">Rated <strong class="rating">5.00</strong> out of 5</span>
								</div>
								<span class="price">
									<?php  
										$kur = $this->db->query("SELECT * FROM gallery a JOIN mobil b ON a.id_mobil=b.id_mobil WHERE a.kriteria='Kursi'")->row_array();
										if ($row = ['id_mobil'] == $kur['id_mobil']) {
											$ktr = $kur['keterangan'];
										}else{
											$ktr = $kur['keterangan'];
										}
									?>
									<span></span><?php echo $ktr; ?>
								</span>
							</center>
						</div>
						<hr>
				<!-- #product-22 -->


			</main>

			<aside class="col-lg-5 col-xl-4 mt-2">
				<div class="widget woocommerce widget_recently_viewed_products">

					<h5 class="widget-title">Keterangan</h5>
					
					<ul class="product_list_widget">
						<li>
							<a href="shop-product-right.html">
								<img src="<?php echo base_url('assets/foto_mobil/'.$rows['foto']) ?>" alt="">
								<span class="product-title">Merk</span>
							</a>
							<div class="d-flex justify-content-between rating-product">
								<div class="star-rating">
									<span style="width:80%">Rated
										<strong class="rating">5.00 </strong>
										out of 5
									</span>
								</div>
								<a href="#" class="remove" aria-label="Top" data-product_id="73" data-product_sku=""><i class="fs-14 ico-check color-main"></i></a>
							</div>
							<span class="woocommerce-Price-amount amount">
								<span class="woocommerce-Price-currencySymbol"></span><?php echo $rows['nama_merk']; ?>
							</span>
						</li>
						<li>
							<a href="shop-product-right.html">
								<img src="<?php echo base_url('assets/foto_mobil/'.$rows['foto']) ?>" alt="">
								<span class="product-title">Type</span>
							</a>
							<div class="d-flex justify-content-between rating-product">
								<div class="star-rating">
									<span style="width:80%">Rated
										<strong class="rating">5.00 </strong>
										out of 5
									</span>
								</div>
								<a href="#" class="remove" aria-label="Car" data-product_id="73" data-product_sku=""><i class="fs-14 ico-bars color-main"></i></a>
							</div>
							<span class="woocommerce-Price-amount amount">
								<span class="woocommerce-Price-currencySymbol"></span>
								<?php echo $rows['nama_mobil']; ?>
							</span>
						</li>

						<li>
							<a href="shop-product-right.html">
								<img src="<?php echo base_url('assets/foto_mobil/'.$rows['foto']) ?>" alt="">
								<span class="product-title">Nopol</span>
							</a>
							<div class="d-flex justify-content-between rating-product">
								<div class="star-rating">
									<span style="width:80%">Rated
										<strong class="rating">5.00 </strong>
										out of 5
									</span>
								</div>
								<a href="#" class="remove" aria-label="Top" data-product_id="73" data-product_sku=""><i class="fs-14 ico-placeholder color-main"></i></a>
							</div>
							<span class="woocommerce-Price-amount amount">
								<span class="woocommerce-Price-currencySymbol"></span>
								<?php echo $rows['nopol']; ?>
							</span>
						</li>

						<li>
							<a href="shop-product-right.html">
								<img src="<?php echo base_url('assets/foto_mobil/'.$rows['foto']) ?>" alt="">
								<span class="product-title">Tahun</span>
							</a>
							<div class="d-flex justify-content-between rating-product">
								<div class="star-rating">
									<span style="width:80%">Rated
										<strong class="rating">5.00 </strong>
										out of 5
									</span>
								</div>
								<a href="#" class="remove" aria-label="Top" data-product_id="73" data-product_sku=""><i class="fs-14 ico-mechanic color-main"></i></a>
							</div>
							<span class="woocommerce-Price-amount amount">
								<span class="woocommerce-Price-currencySymbol"></span>
								<?php echo $rows['tahun']; ?>
							</span>
						</li>

						<li>
							<a href="shop-product-right.html">
								<img src="<?php echo base_url('assets/foto_mobil/'.$rows['foto']) ?>" alt="">
								<span class="product-title">Warna</span>
							</a>
							<div class="d-flex justify-content-between rating-product">
								<div class="star-rating">
									<span style="width:80%">Rated
										<strong class="rating">5.00 </strong>
										out of 5
									</span>
								</div>
								<a href="#" class="remove" aria-label="Top" data-product_id="73" data-product_sku=""><i class="fs-14 ico-painting color-main"></i></a>
							</div>
							<span class="woocommerce-Price-amount amount">
								<span class="woocommerce-Price-currencySymbol"></span>
								<?php echo $rows['warna']; ?>
							</span>
						</li>
					</ul>
				</div>
			</aside>
		</div>
		<center>
			<form method="post" action="<?php echo base_url('booking/tambah_booking');?>">
				<input type="hidden" name="id" value="<?php echo $rows['id_mobil']; ?>" />
				<input type="hidden" name="id_merk" value="<?php echo $rows['id_merk']; ?>" />
				<input type="hidden" name="nama" value="<?php echo $rows['nama_merk']; ?>" />
				<input type="hidden" name="mobil" value="<?php echo $rows['nama_mobil']; ?>" />
				<input type="hidden" name="qty" value="1" />
                <input type="hidden" name="harga" value="<?php echo $rows['hrg_rental']; ?>" />
                <input type="hidden" name="foto" value="<?php echo $rows['foto']; ?>" />
                 
			
			<?php 
			$reg = $this->db->query("SELECT * FROM mobil a JOIN booking b ON a.id_mobil=b.id_mobil WHERE b.status='Dibooking' AND a.id_mobil='".$rows['id_mobil']."' ORDER BY a.id_mobil")->row_array();
			if($reg['status'] == 'Dibooking') {?>
			<a href="#" type="submit" id="contact_form_submit" class="btn btn-small btn-outline-maincolor btn-appointment" data-toggle="modal" data-target="#modalBookForm">Booking Sekarang</a>
			<?php 
		 	} elseif ($this->session->role == 'Konsumen') {?>
		 	<button type="submit" id="contact_form_submit" class="btn btn-small btn-outline-maincolor btn-appointment">Booking Sekarang</button>
			<?php }else{?>
			<a href="<?php echo base_url('auth') ?>" type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-small btn-outline-maincolor btn-appointment">Booking Sekarang</a>
			<?php } ?>
			</form>
		</center>
	</div>
</section>