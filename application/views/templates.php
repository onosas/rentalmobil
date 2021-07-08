<?php 
if ($this->session->username != ''){
  $users = $this->db->query("SELECT * FROM users where username='".$this->session->username."'")->row_array();
}
// $logo = $this->home->logo()->row_array();
$rows = $this->home->profile_perusahaan()->row_array();
?>
<!DOCTYPE html>
<html class="no-js">

<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="<?php echo base_url('assets/images/'.$rows['favicon']) ?>">

	<link rel="stylesheet" href="<?php echo base_url('assets/template/') ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/template/') ?>css/animations.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/template/') ?>css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/template/') ?>css/main.css" class="color-switcher-link">
	<script src="<?php echo base_url('assets/template/') ?>js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="http://webdesign-finder.com/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="modalLoginForm" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="row c-gutter-0">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span>×</span>
				</button>
				<div class="col-6">
					<div class="modal-content">
						<div class="modal-header justify-content-center">
							<h4 class="modal-title">Sign in</h4>
						</div>
						<div class="modal-body">
							<form role="form" method="POST" action="<?php echo base_url('auth/login') ?>">
								<div class="form-group has-placeholder">
									<label for="name-sigin">Username:</label>
									<input type="text" class="form-control" id="name-sigin" placeholder="Masukkan Username" name="username">
								</div>
								<div class="form-group has-placeholder">
									<label for="sigpassword">Password:</label>
									<input type="password" class="form-control" id="sigpassword" placeholder="Password" name="password">
								</div>
								<div class="modal-password">
									<a href="#" class="modal-password-btn" data-toggle="modal" data-target="#modalSignupForm">Buat Akun?</a>
								</div>
								<div class="modal-footer d-flex justify-content-center">
									<button type="submit" class="btn btn-small btn-maincolor log-btn">Sign in</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-6 ds s-overlay">
					<img src="<?php echo base_url('assets/template/') ?>images/modal-login-form.jpg" alt="">
				</div>
			</div>
		</div>
	</div>


	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<div class="header_absolute slide_absolute ds bs s-overlay">

				<!--topline section visible only on small screens|-->
				<?php include "nav.php"; ?>


				<!--eof topline-->
				<!-- Header -->
				<?php include "header.php"; ?>
				<!-- End Header -->

			</div>

			<!-- Content/SLider -->
			<?php echo $content; ?>
			
			<!-- Footer -->
			<?php include "footer.php"; ?>
			<!-- End Footer -->

			<section class="page_copyright ds ms s-pt-5 s-pb-25 s-py-lg-20">
				<div class="container">
					<div class="divider-2 d-none d-lg-block"></div>
					<div class="row align-items-center">
						<div class="divider-20 d-none d-lg-block"></div>

						<div class="col-md-12 text-center">
							<p class="social-icons with-border">
								<span><a href="<?php echo $rows['facebook'] ?>" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
								<span><a href="<?php echo $rows['whatsapp'] ?>" class="fa fa-whatsapp border-icon rounded-icon" title="whatsapp"></a></span>
								<span><a href="<?php echo $rows['instagram'] ?>" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
							</p>
							<p><a target="_blank" href="<?php echo $rows['alamat_website'] ?>"><?php echo $rows['nama_website'] ?></a></p>
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->

	<script src="<?php echo base_url('assets/template/') ?>js/compressed.js"></script>
	<script src="<?php echo base_url('assets/template/') ?>js/main.js"></script>
	<script src="<?php echo base_url('assets/template/') ?>js/switcher.js"></script>

	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4&amp;callback=initGoogleMap"></script>
	<script>
      $(function(){
          $('#success').delay(4000).fadeOut();
          $('#error').delay(4000).fadeOut();
      });
    </script>
<?php include "modal.php"; ?>
</body>


</html>