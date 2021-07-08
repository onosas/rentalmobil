<section class="ls s-py-60 s-py-lg-100 s-py-xl-150">
	<div class="container">
		<div class="row">
			<main class="col-lg-12">
				<center>
					<h3 class="special-heading text-center mt--5">
						<span class="text-gradient">
							Checkout
						</span>
					</h3>
				</center><br>

				<div class="woocommerce-message">
					<?php  
	                  if ($rows['kode_transaksi']==''){
	                    $kode_transaksi = 'TRX-'.date('YmdHis');
	                  }else{
	                    $kode_transaksi = $rows['kode_transaksi'];
	                  }
	                ?>
	                <b>No. Transaksi :</b>
                    <b style="font: bold; color: deeppink;"><?php echo $kode_transaksi; ?></b>
                    
				</div>
				<form class="woocommerce-cart-form" action="<?php echo base_url()?>booking/checkout" method="post" enctype="multipart/form-data">
					<input class="form-control" type="hidden" name="o" value="<?php echo $kode_transaksi; ?>">
					<table class="shop_table shop_table_responsive cart">
						<thead>
							<tr>
								<th>No</th>
								<th>Foto</th>
								<th>Mobil</th>
								<th>Harga</th>
								<th>Lama Sewa</th>
								<th>Total</th>
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
										<input type="number" class="input-text qty text" step="1" min="1" max="1000" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" title="Qty" size="4">&nbsp;
										<input type="button" value="-" class="minus">
										<i class="fa fa-caret-down" aria-hidden="true"></i>
									</div>
								</td>

								<td >
									<span class="amount">
										<?php echo currency_format($item['total']) ?>
									</span>
								</td>
							</tr>

							<?php endforeach; ?>
						</tbody>
					</table><hr>
					<center>
						<h3 class="special-heading text-center mt--5">
							<span class="text-gradient">
								Konfirmasi Identitas Diri
							</span>
						</h3>
					</center><br>
					<?php 
					if ($this->session->username != ''){
					  $users = $this->db->query("SELECT * FROM users where username='".$this->session->username."'")->row_array();
					}
					?>
					<input style="font-style: bold 18px;" type="text" class="form-control" value="Tn/Ny. <?php echo $users['username'] ?>, silahkan isi data diri anda untuk proses selanjutnya..." readonly><br>
					<div class="row">
	                    <div class="col-sm-6 form-group">
	                        <input class="form-control" type="text" name="d" placeholder="Nama Lengkap">
	                        <?php echo form_error('d','<div style="color:red"><small>','</small></div>') ;?>
	                    </div>
	                    <div class="col-sm-6 form-group">
	                        <input class="form-control" type="text" name="e" placeholder="Alamat Tempat Sesuai KTP" value="<?php echo $users['alamat'] ?>">
	                        <?php echo form_error('e','<div style="color:red"><small>','</small></div>') ;?>
	                    </div>
	                </div>

	                <div class="row">
	                    <div class="col-sm-6 form-group">
	                        <input class="form-control" type="text" name="ee" placeholder="Alamat Tempat Tinggal Saat Ini">
	                        <?php echo form_error('ee','<div style="color:red"><small>','</small></div>') ;?>
	                    </div>
	                    <div class="col-sm-6 form-group">
	                        <label>Status Alamat Saat Ini</label>
	                        <div class="check-list">
	                            <label class="ui-radio ui-radio-primary">
	                                <input type="radio" name="eee" value="Milik Sendiri">
	                                <span class="input-span"></span>Milik Sendiri
	                            </label>
	                            <label class="ui-radio ui-radio-warning">
	                                <input type="radio" name="eee" value="Milik Orang Tua">
	                                <span class="input-span"></span>Milik Orang Tua
	                            </label>
	                            <label class="ui-radio ui-radio-danger">
	                                <input type="radio" name="eee" value="Kontrak/Kost">
	                                <span class="input-span"></span>Kontrak/Kost
	                            </label>
	                        </div>
	                        <?php echo form_error('eee','<div style="color:red"><small>','</small></div>') ;?>
	                    </div>
	                </div>

	                <div class="row">
	                    <div class="col-sm-6 form-group">
	                    	<label>Pilih Jenis Kelamin</label>
	                        <select class="form-control" name="f">
	                            <option value="<?php echo $users['gender'] ?>"><?php echo $users['gender'] ?></option>
	                            <option value="Laki-laki">Laki-laki</option>
	                            <option value="Perempuan">Perempuan</option>
	                        </select>
	                        <?php echo form_error('f','<div style="color:red"><small>','</small></div>') ;?>
	                    </div>
	                    <div class="col-sm-6 form-group">
	                        <input class="form-control" type="number" name="g" placeholder="Nomor KTP Harus 16 Digit" value="<?php echo $users['no_ktp'] ?>">
	                        <?php echo form_error('g','<div style="color:red"><small>','</small></div>') ;?>
	                    </div>
	                </div>

	                <div class="row">
	                    <div class="col-sm-6 form-group">
	                        <input class="form-control" type="number" name="b" placeholder="Nomor Telpon" value="<?php echo $users['no_telpon'] ?>">
	                        <?php echo form_error('b','<div style="color:red"><small>','</small></div>') ;?>
	                    </div>
	                    <div class="col-sm-6 form-group">
	                        <input class="form-control" type="text" name="l" placeholder="Kota Tujuan ( Sedetail Mungkin )">
	                        <?php echo form_error('l','<div style="color:red"><small>','</small></div>') ;?>
	                    </div>
	                </div>

	                <div class="row">
	                    <div class="col-sm-6 form-group">
	                        <label>Tanggal Ambil</label>
	                        <input class="form-control" type="date" name="m" placeholder="Tanggal Ambil">
	                        <?php echo form_error('m','<div style="color:red"><small>','</small></div>') ;?>
	                    </div>
	                    <div class="col-sm-6 form-group">
	                        <label>Jam Ambil</label>
	                        <input class="form-control" type="time" name="mm" placeholder="Tanggal Kembali">
	                        <?php echo form_error('mm','<div style="color:red"><small>','</small></div>') ;?>
	                    </div>
	                </div>

	                <div class="row">
	                    <div class="col-sm-6 form-group">
	                        <label>Tanggal Kembali</label>
	                        <input class="form-control" type="date" name="n" placeholder="Tanggal Ambil">
	                        <?php echo form_error('n','<div style="color:red"><small>','</small></div>') ;?>
	                    </div>
	                    <div class="col-sm-6 form-group">
	                        <label>Jam Kembali</label>
	                        <input class="form-control" type="time" name="nn" placeholder="Tanggal Kembali">
	                        <?php echo form_error('nn','<div style="color:red"><small>','</small></div>') ;?>
	                    </div>
	                </div>

	                <input type="hidden" class="form-control" name="aa" value="Sewa mobil <?php echo $item['name'];?>&nbsp;<?php echo $item['mobil'];?> selama <?php echo $item['qty'] ?> hari">
                	<input class="form-control" type="hidden" name="c" value="0"><br><br>
					<center>
						<button type="submit" class="btn btn-small btn-outline-maincolor" name="submit"><i class="fa fa-send"></i> Place Order</button>
					</center>
				</form>
				

			</main>
		</div>

	</div>
</section>