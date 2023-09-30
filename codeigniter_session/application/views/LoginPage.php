<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!doctype html>
<html lang="en">
	<head>
		<title>Kullanıcı Giriş Ekranı</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php $this->load->view("dependencies/style"); ?>

	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12 card p-5 m-5">
					<h2>Kullanıcı Giriş Ekranı</h2>
					<form action="<?php echo base_url("FirstController/loginProcess") ?>" method="POST">
						<div class="mt-4">
						  <label for="mail" class="form-label">Mail</label>
						  <input type="email" class="form-control mb-2" name="mail" id="mail" autofocus>
						  <?php if(isset($form_error)){ ?> 
							<small>Bu alanların doldurulması zorunludur!</small>
						  <?php } ?>
						</div>
						<div class="mt-4">
						  <label for="password" class="form-label">Password</label>
						  <input type="text" class="form-control mb-2" name="password" id="password">
						  <?php if(isset($form_error)){ ?> 
							<small class="text-end">Bu alanların doldurulması zorunludur!</small>
						  <?php } ?>
						</div>
						<div class="mt-4">
						  <button type="submit" name="login" class="btn btn-success">Giriş Yap</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php $this->load->view("dependencies/scripts"); ?>
	</body>
</html>