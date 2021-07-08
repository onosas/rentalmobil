
<section class="ls s-pt-50 s-pb-40 s-pt-lg-90 s-pb-lg-80 s-pt-xl-140 s-pb-xl-130">
	<div class="divider-3"></div>
	<div class="container">
		<div class="row">
			<main class="col-lg-12">
				<form method="post" class="woocommerce-ResetPassword lost_reset_password text-center" action="<?php echo base_url('auth'); ?>">
					<h3 class="special-heading text-center">
						<span class="text-gradient">
							Pendaftaran Akun
						</span>
					</h3>
					<p>Silahkan daftar dulu sebelum order rental mobil.</p>

					<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first mt-20">
						<label for="user_login">Username</label>
						<input class="form-control text-center woocommerce-Input woocommerce-Input--text input-text" type="text" id="user_login" placeholder="Username" name="a">
						<?php echo form_error('a','<div style="color:red"><small>','</small></div>') ;?>
					</p>

					<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first mt-20">
						<label for="user_login">No Telphone</label>
						<input class="form-control text-center woocommerce-Input woocommerce-Input--text input-text" type="number" id="user_login" placeholder="No Telphone" name="b">
						<?php echo form_error('b','<div style="color:red"><small>','</small></div>') ;?>
					</p>

					<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first mt-20">
						<label for="user_login">Password</label>
						<input class="form-control text-center woocommerce-Input woocommerce-Input--text input-text" type="password" id="user_login" placeholder="Password" name="c">
						<?php echo form_error('c','<div style="color:red"><small>','</small></div>') ;?>
					</p>

					<div class="clear"></div>

					<div class="divider-20"></div>
					<p class="woocommerce-form-row form-row">
						<button type="submit" class="woocommerce-Button btn btn-maincolor">Daftar Sekarang</button>
					</p>

					<p class="woocommerce-form-row form-row">
						Sudah punya akun? 
						<b><a style="color: deeppink;" href="#" data-toggle="modal" data-target="#modalLoginForm">Login Disini</a></b>
					</p>

				</form>


			</main>
		</div>
	</div>
</section>