<section class="page_toplogo ds s-overlay s-pt-10 s-pb-5 s-py-lg-30">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="d-lg-flex justify-content-lg-end align-items-lg-center">
					<div class="mr-auto">
						<div class="d-none d-lg-flex justify-content-center justify-content-lg-start">
							<a href="<?php echo base_url('home') ?>" class="logo">
								<img src="<?php echo base_url('assets/images/'.$rows['favicon']) ?>" alt="">
								<span class="logo-text fw-500"><?php echo $rows['nama_website'] ?></span>
							</a>
						</div>
					</div>
					<div class="d-flex justify-lg-content-end align-items-center meta-icons">
						<div class="media">
							<div class="icon-styled color-main fs-20">
								<i class="ico-email"></i>
							</div>
							<div class="media-body">
								<h6>Mail Us</h6>
								<p class="fw-400">
									<?php echo $rows['email'] ?>
								</p>
							</div>
						</div>
						<div class="media d-none d-md-flex">
							<div class="icon-styled color-main fs-20">
								<i class="ico-placeholder"></i>
							</div>
							<div class="media-body">
								<h6>Location</h6>
								<p class="fw-400">
									<?php echo $rows['kota'] ?>,<?php echo $rows['kodepos'] ?>
								</p>
							</div>
						</div>
						<div class="media">
							<div class="icon-styled color-main fs-20">
								<i class="ico-phone-call"></i>
							</div>
							<div class="media-body">
								<h6>Phone</h6>
								<p class="fw-400">
									<?php echo $rows['no_telphone'] ?>
								</p>
							</div>
						</div>
						<?php  if ($this->session->username != '') {?>
						<div class="d-none d-xl-block">
							<a href="<?php echo base_url('auth/logout') ?>" class="btn btn-small btn-outline-maincolor btn-appointment">Sign Out Account</a>
						</div>
						<?php }else{?>
						<div class="d-none d-xl-block">
							<a href="#" class="btn btn-small btn-outline-maincolor btn-appointment" data-toggle="modal" data-target="#modalLoginForm">Sign In Account</a>
						</div>
						<?php } ?>
					</div>
				</div>
				<!-- header toggler -->
				<center>
					<?php if ($this->session->flashdata('success')): ?>
				    <div id="success" class="alert alert-success mt-2 col-6" role="alert">
				    	<i class="fa fa-thumb-up"></i>
				        <strong>Success!</strong> <b><?php echo $this->session->flashdata('success'); ?>.</b>
				    </div>
					<?php endif; ?>
					<?php if ($this->session->flashdata('error')): ?>
					    <div id="error" class="alert alert-danger mt-2 col-6" role="alert">
					    	<i class="fa fa-bell"></i>&nbsp;
					        <strong>Ooops!</strong> <b><?php echo $this->session->flashdata('error'); ?>.</b>
					    </div>
					<?php endif; ?>
				</center>
			</div>
		</div>
	</div>
</section>