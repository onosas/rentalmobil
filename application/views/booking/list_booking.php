<section class="ls s-py-60 s-py-lg-100 s-py-xl-150">
	<div class="container">
		<div class="row">
			<main class="col-lg-12">
				
				<?php
				    if ($cart = $this->cart->contents())
				        {
				 ?>
				 <div class="woocommerce-message">
					"Lama Sewa" silahkan ganti qty berapa lama hari untuk sewa mobil.Lanjutkan dengan klik  <a href="#">Update Booking</a>
				</div>
				<form class="woocommerce-cart-form" action="<?php echo base_url()?>booking/ubah_cart" method="post" enctype="multipart/form-data">

					<table class="shop_table shop_table_responsive cart">
						<thead>
							<tr>
								<th>No</th>
								<th>Foto</th>
								<th>Mobil</th>
								<th>Harga</th>
								<th>Lama Sewa</th>
								<th>Total</th>
								<th><i class="fa fa-trash text-danger"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php

								$grand_total = 0;
								$i = 1;
								 
								foreach ($cart as $item):
								$grand_total = $grand_total + $item['subtotal'];
								?>
								<input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
								<input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
								<input type="hidden" name="cart[<?php echo $item['id'];?>][id_merk]" value="<?php echo $item['id_merk'];?>" />
								<input type="hidden" name="cart[<?php echo $item['id'];?>][mobil]" value="<?php echo $item['mobil'];?>" />
								<input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
								<input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
								<input type="hidden" name="cart[<?php echo $item['id'];?>][foto]" value="<?php echo $item['foto'];?>" />
								<input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />
								<input type="hidden" name="cart[<?php echo $item['id'];?>][total]" value="<?php echo $item['total'];?>" />
							<tr class="cart_item">

								<td>
									<a href="#" class="remove" aria-label="Remove this item" data-product_id="73" data-product_sku="">
										<?php echo $i++; ?>
									</a>
								</td>

								<td>
									<a href="shop-product-right.html">
										<img width="180" height="180" src="<?php echo base_url('assets/foto_mobil/'.$item['foto']) ?>" class="" alt="">
									</a>
								</td>

								<td>
									<a href="shop-product-right.html">
										<?php echo $item['name']; ?>&nbsp;<?php echo $item['mobil']; ?>
									</a>
								</td>

								<td>
									<span class="amount">
										<?php echo currency_format($item['price']) ?>
									</span>
								</td>

								<td>
									<div class="quantity">
										<input type="button" value="+" class="plus">
										<i class="fa fa-caret-up" aria-hidden="true"></i>
										<input type="number" class="input-text qty text" step="1" min="1" max="1000" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" title="Qty" size="4">&nbsp;&nbsp;
										<input type="button" value="-" class="minus">
										<i class="fa fa-caret-down" aria-hidden="true"></i>
									</div>
								</td>

								<td >
									<span class="amount">
										<?php echo currency_format($item['total']) ?>
									</span>
								</td>

								<td>
									<a href="<?php echo base_url()?>booking/hapus/<?php echo $item['rowid'];?>" class="remove" aria-label="Remove this item">×</a>
								</td>
							</tr>

							<?php endforeach; ?>

							<tr>
								<td colspan="6" class="actions">

									<div class="coupon">
										<a href="#" type="submit" class="btn btn-small btn-maincolor" data-toggle="modal" data-target="#modalHapuscartForm"><i class="fa fa-trash"></i> Hapus Booking</a>
										<a href="<?php echo base_url('booking/checkout')?>" type="submit" class="btn btn-small btn-outline-maincolor"><i class="fa fa-check"></i> Check Out</a>
									</div>
									<button type="submit" class="btn btn-small btn-outline-maincolor" name="update_cart"><i class="fa fa-refresh"></i> Update Booking</button>
								</td>
							</tr>

						</tbody>
					</table>
					<?php }else{ ?>
					<center>
					    <h3 class="special-heading text-center mt--5">
							<span class="text-gradient">
					    		Belum Ada Booking Mobil!
					    	</span>
						</h3>
					</center>
				<?php } ?>
				</form>
				

<div class="modal fade" id="modalHapuscartForm" tabindex="-1" role="dialog" aria-labelledby="modalHapuscartForm" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="row c-gutter-0">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span>×</span>
			</button>
			<div class="col-12">
				<div class="modal-content" style="background-image: url(<?php echo base_url('assets/template/') ?>images/gallery/13.jpg);">
					<div class="modal-header justify-content-center">
						<h3 class="special-heading text-center mt--5">
						<span class="text-gradient">
							Konfirmasi
						</span>
					</h3>
					</div>
					<div class="modal-body">
						<form role="form" method="POST" action="<?php echo base_url('booking/hapus/all') ?>">
						<center>
							<div class="form-group has-placeholder">
								<h5>
									Apakah Anda Yakin Untuk Menghapus Cart Booking?
								</h5><br>
          						<button type="button" class="btn btn-small btn-default">Tidak</button>
          						<button type="submit" class="btn btn-small btn-maincolor log-btn">Ya</button>
							</div>
						</center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
			</main>
		</div>

	</div>
</section>