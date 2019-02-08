<!DOCTYPE html>
<html lang="en" class="fullscreen-bg">

	<head>
		<title>Login MyLibrary</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- VENDOR CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/linearicons/style.css">
		<!-- MAIN CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
		<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/demo.css">
		<!-- GOOGLE FONTS -->
		<link href="<?=base_url()?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
		<!-- ICONS -->
		<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/apple-icon.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url()?>assets/img/favicon.png">
	</head>
	<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content" style="width:300px;">
							<div class="header">
							<a href="#" class="site_title"><i class="fa fa-book"></i> <span>MyLibrary</span></a>
								<p class="lead">Masuk ke akun Anda</p>
							</div>
							<?php
                    		$notif = $this->session->flashdata('notif');
                    		if(!empty($notif)){
                        	echo '<div class="alert alert-danger">'.$notif.'</div>';
                    		}?>

							<form class="form-auth-small" action="<?= base_url('index.php/Login/login')?>" method="post">
								<div class="form-group">
									<label for="signin-username" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" placeholder="Nama pengguna"  name="username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control"  placeholder="Kata sandi" name="password">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Ingat saya</span>
									</label>
								</div>
								<input type="submit" name="submit" value="Masuk"  class="btn btn-primary btn-lg btn-block">
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="<?=base_url()?>#">Lupa kata sandi?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">"Membacalah, karena tidak ada seorangpun yang dilahirkan dalam keadaan berilmu."</h1>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
	</body>
</html>
