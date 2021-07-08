<section class="ls s-py-60 s-py-lg-100 s-py-xl-150">
	<div class="container">
		<div class="row">
			<main class="col-lg-12">
				<center>
					<h3 class="special-heading text-center mt--5">
						<span class="text-gradient">
							Jaminan
						</span>
					</h3>
				</center><br>

				<div class="woocommerce-message">
					
	                <b>No. Transaksi :</b>
                    <b style="font: bold; color: deeppink;"><?php echo $no_trx; ?></b>
                    
				</div>
				<form class="woocommerce-cart-form" action="<?php echo base_url('booking/addjaminan')?>" method="post" enctype="multipart/form-data">
					<input class="form-control" type="hidden" name="a" value="<?php echo $no_trx; ?>">
					
					<input style="font-style: bold 18px;" type="text" class="form-control" value="Tn/Ny. <?php echo $nama_lengkap; ?>, proses transaksi telah berhasil, silahkan lengkapi data berikut ini..." readonly><br>
					
					<div class="row">
	                    <div class="col-sm-6 form-group">
	                        <label>Nama Lengkap</label>
	                        <input class="form-control" type="text" name="b" value="<?php echo $nama_lengkap; ?>">
	                    </div>
	                    <div class="col-sm-6 form-group">
	                        <label>No. KTP</label>
	                        <input class="form-control" type="number" name="c" placeholder="No. KTP jaminan 2" required>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-6 form-group">
	                        <label>Pemilik KTP</label>
	                        <div class="check-list">
	                            <label class="ui-radio ui-radio-primary">
	                                <input type="radio" name="d" value="Milik Suami">
	                                <span class="input-span"></span>Milik Suami
	                            </label>
	                            <label class="ui-radio ui-radio-warning">
	                                <input type="radio" name="d" value="Milik Istri">
	                                <span class="input-span"></span>Milik Istri
	                            </label>
	                            <label class="ui-radio ui-radio-success">
	                                <input type="radio" name="d" value="Milik Orang Tua">
	                                <span class="input-span"></span>Milik Orang Tua
	                            </label>
	                            <label class="ui-radio ui-radio-default">
	                                <input type="radio" name="d" value="Milik Saudara">
	                                <span class="input-span"></span>Milik Saudara
	                            </label>
	                            <label class="ui-radio ui-radio-danger">
	                                <input type="radio" name="d" value="Milik Teman">
	                                <span class="input-span"></span>Milik Teman
	                            </label>
	                        </div>
	                    </div>
	                    <div class="col-sm-6 form-group">
	                        <label>Nama Unit</label>
	                        <input class="form-control" type="text" name="e" placeholder="Merk Type Unit Jaminan" required>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-6 form-group">
	                        <label>Nopol</label>
	                        <input class="form-control" type="text" name="f" placeholder="Nopol Unit" required>
	                    </div>
	                    <div class="col-sm-6 form-group">
	                        <label>Tahun</label>
	                        <input class="form-control" type="text" name="g" placeholder="Tahun Unit" required>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-6 form-group">
	                        <label>Warna</label>
	                        <input class="form-control" type="text" name="h" placeholder="Warna Unit" required>
	                    </div>
	                    <div class="col-sm-6 form-group">
	                        <label>Atas Nama STNK</label>
	                        <input class="form-control" type="text" name="m" placeholder="Atas Nama Di STNK" required>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-6 form-group">
	                        <label>No Telp 1</label>
	                        <input class="form-control" type="number" name="i" placeholder="No. Telp 1" required>
	                    </div>
	                    <div class="col-sm-6 form-group">
	                        <label>Pemilik No Telp</label>
	                        <input class="form-control" type="text" name="j" placeholder="Pemilik No Telp" required>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-6 form-group">
	                        <label>No Telp 2</label>
	                        <input class="form-control" type="number" name="k" placeholder="No Telp 2" required>
	                    </div>
	                    <div class="col-sm-6 form-group">
	                        <label>Pemilik No Telp</label>
	                        <input class="form-control" type="text" name="l" placeholder="Pemilik No Telp" required>
	                    </div>
	                </div>
	                <div class="col-sm-6 form-group">
	                    <div class="col-sm-6 form-group">
	                        <label>Multiple Upload</label>
	                        <input type="file" id="fileupload" class="form-control" name="userfile[]" multiple><br>
	                        *Multiple Upload Foto : Upload Foto Jaminan, dan bawa ke kantor di hari kemudian.
	                    </div>
	                    <div class="col-sm-6 form-group"></div>
	                </div>
					<center>
						<button type="submit" class="btn btn-small btn-outline-maincolor" name="submit"><i class="fa fa-send"></i> Konfirmasi</button>
					</center>
				</form>
				

			</main>
		</div>

	</div>
</section>