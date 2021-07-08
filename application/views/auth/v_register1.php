<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
	<title>Register Form</title>
	<link href="<?php echo base_url('assets/admin/') ?>css/register.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets/admin/') ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>
	<div class="container">
		<div class="screen">
			<div class="screen__content">
				<form class="login" role="form" method="POST" action="<?php echo base_url('auth'); ?>">
					<div class="login__field">
						<i class="login__icon fa fa-user"></i>
						<input type="text" class="login__input" name="a" placeholder="User name">
						<?php echo form_error('a','<div style="color:red"><small>','</small></div>') ;?>
					</div>
					<div class="login__field">
						<i class="login__icon fa fa-phone"></i>
						<input type="number" class="login__input" name="b" placeholder="Phone Number">
						<?php echo form_error('b','<div style="color:red"><small>','</small></div>') ;?>
					</div>
					<div class="login__field">
						<i class="login__icon fa fa-lock"></i>
						<input type="password" class="login__input" name="c" placeholder="Password">
						<?php echo form_error('c','<div style="color:red"><small>','</small></div>') ;?>
					</div>
					<button type="submit" class="button login__submit">
						<span class="button__text">Sign Up Now</span>
						<i class="button__icon fa fa-chevron-right"></i>
					</button>				
				</form>
				<div class="social-login">
					<div class="social-icons">
						<a href="#" class="social-login__icon fa fa-instagram"></a>
						<a href="#" class="social-login__icon fa fa-facebook"></a>
						<a href="#" class="social-login__icon fa fa-twitter"></a>
					</div>
				</div>
			</div>
			<div class="screen__background">
				<span class="screen__background__shape screen__background__shape4"></span>
				<span class="screen__background__shape screen__background__shape3"></span>		
				<span class="screen__background__shape screen__background__shape2"></span>
				<span class="screen__background__shape screen__background__shape1"></span>
			</div>		
		</div>
	</div>
	<script>
      $(function(){
          $('#success').delay(4000).fadeOut();
          $('#error').delay(4000).fadeOut();
      });
    </script>
</body>
</html>