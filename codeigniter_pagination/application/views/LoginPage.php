<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!doctype html>
<html lang="en">
	<head>
		<title>codeigniter_pagination | Project</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php $this->load->view("dependencies/style"); ?>

	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-8 card p-5 mt-5" style="display:flex; margin:auto;">
					<h3 class="text-center">Kullanıcı Giriş Ekranı</h3>
					
					
					<form action="<?php echo base_url("FirstController/loginProcess")?>" method="post">
						<div class="mt-4">
						  <label for="username" class="form-label">Username</label>
						  <input type="text" class="form-control" name="username" autofocus>
						</div>
						<div class="mt-4">
						  <label for="password" class="form-label">Password</label>
						  <input type="password" class="form-control" name="password">
						</div>

						<div class="message">
						    <?php if ($this->session->flashdata('message')) : ?>
						        <p class="success"><?php echo $this->session->flashdata('message'); ?></p>
						    <?php endif; ?>
							
						    <?php if ($this->session->flashdata('error')) : ?>
						        <p class="error text-danger mt-4"><?php echo $this->session->flashdata('error'); ?></p>
						    <?php endif; ?>
						</div>

						<div class="mt-4">
							<button type="submit" class="btn btn-success">Giriş Yap</button>
						</div>
					</form>

				</div>
			</div>
		</div>
		<?php $this->load->view("dependencies/scripts"); ?>
	</body>
</html>