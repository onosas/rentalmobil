<section class="ls s-py-60 s-py-lg-100 s-py-xl-150">
	<div class="container">
		<div class="row">
			<main class="col-lg-12">
				<!-- Form -->
				<form class="woocommerce-cart-form" action="#" method="post" enctype="multipart/form-data">

					<table class="shop_table shop_table_responsive cart">
						<thead>
							<tr>
								<th>No</th>
								<th>Foto</th>
								<th>Mobil</th>
								<th>Harga</th>
								<th>Lama Sewa</th>
								<th>Total</th>
								<th>Bukti Transfer</th>
							</tr>
						</thead>
						<tbody>
							<?php  
                            $no = 1;
                            foreach ($record->result_array() as $row) {
                                $ambil = $row['tgl_ambil'];
                                $kembali = $row['tgl_kembali'];
                                $lama  = $row['lama_sewa'];
                                $mobil = $row['nama_mobil'];
                                $merk  = $row['nama_merk'];
                                $nopol = $row['nopol'];
                                $warna = $row['warna'];
                                $cek   = $row['tgl_kembali'].'&nbsp;'.$row['jam_kembali'];
                                if ($row['status']=='Dibooking') {
                                    $status = '<i style="color:limegreen"></i>';
                                }else{
                                    $status = '<i style="color:red"></i>';
                                }
                        	?>
							<tr class="cart_item">

								<td>
									<a href="#" class="remove" aria-label="Remove this item" data-product_id="73" data-product_sku="">
										<?php echo $no++; ?>
									</a>
								</td>

								<td>
									<a href="shop-product-right.html">
										<img width="180" height="180" src="<?php echo base_url('assets/foto_mobil/'.$row['foto']) ?>" class="" alt="">
									</a>
								</td>

								<td>
									<a href="shop-product-right.html">
										<?php echo $merk  ?><br>
		                                <?php echo $mobil  ?><br>
		                                <?php echo $nopol  ?><br>
		                                <?php echo $warna  ?>
									</a>
								</td>

								<td>
									<span class="amount">
										<?php echo currency_format($row['hrg_rental']) ?>
									</span>
								</td>

								<td>
									<?php echo $lama; ?> Hari<br> (<?php echo tgl_indo($ambil); ?> s/d <?php echo tgl_indo($kembali); ?>)<br> (<?php echo $row['jam_ambil']; ?> s/d <?php echo $row['jam_kembali']; ?>)
								</td>

								<td >
									<span class="amount">
										<?php echo currency_format($row['total']) ?>
									</span>
								</td>

								<td>
									<?php if ($row['gbr_tf'] == '') {?>
									<a href="<?php echo base_url('order/bukti_transfer/'.$row['id_booking']) ?>" class="btn btn-warning btn-xs m-r-5" data-toggle="tooltip" data-original-title="Upload Bukti Transfer"><i class="fa fa-send font-14"></i> Upload TF</a>
									<?php }else{ ?>
									<img style="width: 50px" src="<?php echo base_url('assets/bukti/'.$row['gbr_tf']) ?>">
									<?php } ?>
								</td>
							</tr>

							<?php } ?>
						</tbody>
					</table>
				</form>
				<!-- End Form -->
			</main>
		</div>

	</div>
</section>