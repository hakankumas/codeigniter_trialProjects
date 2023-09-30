<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!doctype html>
<html lang="en">
	<head>
		<title><?php echo $user->mail; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<?php $this->load->view("dependencies/style"); ?>
	</head>
	<body>

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <div class="container">

		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link active"><b><?php echo $user->mail; ?></b></a>
		        </li>
		      </ul>
		    </div>

		    <!-- Example single danger button -->
			<div class="btn-group">
				<button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">İşlemler</button>
				<ul class="dropdown-menu">
					<?php foreach($user_list as $item) { ?>
						<?php if(md5($item->mail) != md5($user->mail)) { ?>
						<li><a class="dropdown-item" href="<?php echo base_url("anasayfa/" . md5($item->mail))?>"><?php echo $item->name." ".$item->surname; ?></a></li>
						<?php } ?>
					<?php } ?>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item text-primary" target="_blank" href="<?php echo base_url("giris")?>">Hesap Ekle</a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item text-danger" href="<?php echo base_url("cikis/" . md5($user->mail))?>">Oturumu Kapat</a></li>
				</ul>
			</div>
		  </div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-md-12 card mt-5 p-4">
					<h2>Ana Sayfa</h2>
				</div>
				<div class="col-md-12 card p-5 mt-5">
					<table class="table table-striped table-hover">
						<thead>
							<th class="ps-4 pe-4">Ürün ID</th>
							<th class="ps-4 pe-4">Ürün Adı</th>
						</thead>
						<tbody>
							<?php foreach($products as $product) { ?>
							<tr>
								<td class="ps-4 pe-4" style="width: 50%;"><?php echo $product->product_id; ?></td>
								<td class="ps-4 pe-4" style="width: 50%;"><?php echo $product->product_name; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<footer class="p-5 mt-5 bg-secondary">
			<div class="container">
				<h5 class="text-center text-white"><i>codeigniter_session | Trial Project</i></h5>
			</div>
		</footer>	
		<?php $this->load->view("dependencies/scripts"); ?>
	</body>
</html>