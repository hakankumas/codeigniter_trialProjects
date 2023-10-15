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
	<nav class="navbar navbar-expand-sm navbar-light bg-primary">
	  <div class="container">
		<a class="navbar-brand text-white" href="<?php echo base_url("FirstController/userHome"); ?>"><b>CodeIgniter3</b></a>
		<button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavId">
			<ul class="navbar-nav me-auto mt-2 mt-lg-0">
				
				<li class="nav-item">
					<a class="nav-link text-white" href="<?php echo base_url("FirstController/userHome"); ?>">Ana Sayfa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="<?php echo base_url("Pages/books"); ?>">Books</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="<?php echo base_url("Pages/programming"); ?>">Programming</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="<?php echo base_url("Pages/games"); ?>">Games</a>
				</li>

			</ul>
			<div class="vr text-white rounded me-2" style="width:3px;"></div>
			<ul class="navbar-nav mt-2 mt-lg-0">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-white btn btn-info" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b><?php echo $this->session->userdata("username"); ?></b></a>
					<div class="dropdown-menu" aria-labelledby="dropdownId">
						<hr class="dropdown-divider">
						<a class="dropdown-item" href="<?php echo base_url("FirstController/logoutProcess"); ?>">Çıkış Yap</a>
					</div>
				</li>
			</ul>
		</div>
  	  </div>
	</nav>

		<div class="message m-3">
		    <?php if ($this->session->flashdata('message')) : ?>
		        <p class="col-2 text-white bg-success justify-content-center rounded p-3" style="display:flex; margin:auto;"><?php echo $this->session->flashdata('message'); ?></p>
		    <?php endif; ?>
			
		    <?php if ($this->session->flashdata('error')) : ?>
		        <p class="error"><?php echo $this->session->flashdata('error'); ?></p>
		    <?php endif; ?>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, ratione.</p>
				</div>
			</div>
		</div>
		<?php $this->load->view("dependencies/scripts"); ?>
	</body>
</html>