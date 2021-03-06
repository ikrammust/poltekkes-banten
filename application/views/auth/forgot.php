<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url('assets/dist/img/icons/favicon.ico'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/dist/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/dist/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/dist/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/dist/vendor/animate/animate.css'); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/dist/vendor/css-hamburgers/hamburgers.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/dist/vendor/animsition/css/animsition.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/dist/vendor/select2/select2.min.css'); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/dist/vendor/daterangepicker/daterangepicker.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/dist/css/util.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/dist/css/main.css');?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?= base_url('assets/dist/img/bg-01.jpg'); ?>)">
					<span class="login100-form-title-1">
						Password
					</span>
                </div>
                
                <br>

                <?= $this->session->flashdata('message');?>

				<form class="login100-form validate-form" method="post" action="<?= base_url('auth/forgot') ?>">
					<div class="wrap-input100 validate-input m-b-26" data-validate="NIP is required">
						<span class="label-input100">NIP / NIM</span>
						<input class="input100" autocomplete="off" type="text" name="nip" placeholder="Enter NIP / NIM" value="<?= set_value('nip'); ?>">
						<span class="focus-input100"></span>
					</div>
					<?= form_error('nip', '<small class="text-danger">', '</small>'); ?>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">New Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter New Password">
						<span class="focus-input100"></span>
                    </div>
					<?= form_error('password', '<small class="text-danger">', '</small>'); ?>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" name="passwordr" placeholder="Confirm your Password">
						<span class="focus-input100"></span>
                    </div>
					<?= form_error('passwordr', '<small class="text-danger">', '</small>'); ?>
                    
                    <div class="container">
                        <div class="row">
							<div class="col-md-8">
                                <a href="<?= base_url('auth') ?>" class="txt1">
                                    I Remember Now,<span class="text-danger"> Login here! </span>
								</a>
								<br>
								<a href="<?= base_url('auth/regist') ?>" class="txt1">
                                    Don't Have Account? <span class="text-danger">Register here!</span>
                                </a>
							</div>
							<div class="col-md-4">
							<button class="login100-form-btn" type="submit">
								Change
							</button>
							</div>
                        </div>
                    </div>
				</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="<?= base_url('assets/dist/vendor/jquery/jquery-3.2.1.min.js');  ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/dist/vendor/animsition/js/animsition.min.js');  ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/dist/vendor/bootstrap/js/popper.js');  ?>"></script>
	<script src="<?= base_url('assets/dist/vendor/bootstrap/js/bootstrap.min.js');  ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/dist/vendor/select2/select2.min.js');  ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/dist/vendor/daterangepicker/moment.min.js');  ?>"></script>
	<script src="<?= base_url('assets/dist/vendor/daterangepicker/daterangepicker.js');  ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/dist/vendor/countdowntime/countdowntime.js');  ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/dist/js/main.js');  ?>"></script>

</body>
</html>