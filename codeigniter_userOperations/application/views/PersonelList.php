<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!doctype html>
<html lang="tr">
	<head>
		<title>Codeigniter User Operations | Project</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php $this->load->view("dependencies/style"); ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body>
		<div class="container">
			<div class="row">
        		<div class="w-100 mt-5 p-5 border rounded">
					<div class="d-flex justify-content-end">
						<a href="<?php echo base_url("FirstController/insertPage")?>" class="btn btn-lg btn-primary mb-4"><i class="fa fa-plus-circle p-2" aria-hidden="true"></i></a>
					</div>
					<h2 class="text-center">Kullanıcı Listesi</h2>
					<div class="btn-group mb-3">
					  	<button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-sort p-2" aria-hidden="true"></i></button>
					  	<ul class="dropdown-menu">
					    	<li><a class="dropdown-item" href="<?php echo base_url("FirstController/orderby_id_artan")?>">ID - Artan</a></li>
					    	<li><a class="dropdown-item" href="<?php echo base_url("FirstController/orderby_id_azalan")?>">ID - Azalan</a></li>
					    	<li><a class="dropdown-item" href="<?php echo base_url("FirstController/orderby_name_artan")?>">Ad - Artan</a></li>
					    	<li><a class="dropdown-item" href="<?php echo base_url("FirstController/orderby_name_azalan")?>">Ad - Azalan</a></li>
					    	<li><a class="dropdown-item" href="<?php echo base_url("FirstController/orderby_surname_artan")?>">Soyad - Artan</a></li>
					    	<li><a class="dropdown-item" href="<?php echo base_url("FirstController/orderby_surname_azalan")?>">Soyad - Azalan</a></li>
					    	<li><a class="dropdown-item" href="<?php echo base_url("FirstController/orderby_title_artan")?>">Unvan - Artan</a></li>
					    	<li><a class="dropdown-item" href="<?php echo base_url("FirstController/orderby_title_azalan")?>">Unvan - Azalan</a></li>
					  	</ul>
					</div>
					<table class="table table-hover table-striped border">
						<thead>
							<th class="text-center">ID</th>
							<th class="text-center">Ad</th>
							<th class="text-center">Soyad</th>
							<th class="text-center">Unvan</th>
							<th class="text-center">Düzenle</th>
							<th class="text-center">Sil</th>
						</thead>
						<tbody>
							<?php foreach($rows as $row) { ?>
								<tr>
									<td class="text-center" style="width:100px;"><?= $row->id ?></td>
									<td class="text-center" style="width: 20%;"><?= $row->name ?></td>
									<td class="text-center" style="width: 20%;"><?= $row->surname ?></td>
									<td class="text-center" style="width: auto;"><?= $row->title ?></td>
									<td class="text-center" style="width:100px;"><a href="<?php echo base_url("FirstController/updatePage/$row->id") ?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
									<td class="text-center" style="width:100px;"><a href="<?php echo base_url("FirstController/deleteProcess/$row->id") ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
        		</div>
			</div>
		</div>
		<div class="p-5 mt-5"></div>	
		<?php $this->load->view("dependencies/scripts"); ?>
	</body>
</html>