<section class="ls s-pt-50 s-pb-40 s-pt-lg-90 s-pb-lg-80 s-pt-xl-140 s-pb-xl-130">
	<div class="divider-3"></div>
	<div class="container">
		<div class="row">
			<main class="col-lg-12">
				<form method="post" class="woocommerce-ResetPassword lost_reset_password text-center" action="<?php echo base_url()?>order/bukti_transfer"  enctype="multipart/form-data">
					<b>No. Transaksi : <?php echo $rows['no_trx'] ?></b>
					<p>Selesaikan transaksi anda . Silahkan upload bukti transfer pembayaran anda dibawah ini.</p>

					<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first mt-20">
						<input type="hidden" name="id" value="<?php echo $rows['id_booking'] ?>">
						<label for="user_login">Nama Bank</label>
						<input class="form-control text-center woocommerce-Input woocommerce-Input--text input-text" type="text" name="a" id="user_login" value="<?php echo $rows['nama_bank'] ?>" placeholder="Nama Bank" required>
						<br>
						<label for="user_login">No Rekening</label>
						<input class="form-control text-center woocommerce-Input woocommerce-Input--text input-text" type="number" name="b" id="user_login" value="<?php echo $rows['no_rekening'] ?>" placeholder="No Rekening" required>
						<br>
						<label for="user_login">Pemilik Rekening</label>
						<input class="form-control text-center woocommerce-Input woocommerce-Input--text input-text" type="text" name="c" id="user_login" value="<?php echo $rows['an_rekening'] ?>" placeholder="Pemilik Rekening" required>
						<br>
						<label for="user_login">Upload Bukti Transfer</label>
						<input class="form-control text-center woocommerce-Input woocommerce-Input--text input-text" type="file" name="d" id="user_login" placeholder="Username or email" required>
					</p>

					<div class="clear"></div>

					<div class="divider-20"></div>
					<p class="woocommerce-form-row form-row">
						<button type="submit" name="submit" class="woocommerce-Button btn btn-maincolor">Konfirmasi</button>
					</p>

				</form>
			</main>
		</div>
	</div>
</section>
