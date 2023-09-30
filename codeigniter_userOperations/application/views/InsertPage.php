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
        <div class="w-100 p-5 mt-5 border rounded">
          <div class="d-flex justify-content-end">
            <a href="<?php echo base_url("FirstController/index")?>" class="btn btn-lg btn-warning mb-4"><i class="fa fa-arrow-circle-left p-2" aria-hidden="true"></i></a>
          </div>
          <h2 class="text-center">Kullanıcı Kayıt Ekranı</h2>
          <form action="<?php echo base_url('FirstController/insertProcess')?>" method="POST">
            <div class="mt-4">
              <label for="name" class="form-label">Ad</label>
              <input type="text"class="form-control" name="name" id="name" autofocus>
            </div>
            <div class="mt-4">
              <label for="surname" class="form-label">Soyad</label>
              <input type="text"class="form-control" name="surname" id="surname">
            </div>
            <div class="mt-4">
              <label for="title" class="form-label">Unvan</label>
              <input type="text"class="form-control" name="title" id="title">
            </div>
            <div class="mt-4">
                <input type="submit" name="gonder" class="btn btn-success">
            </div>
          </div>
          </form>
        </div>
			</div>
		</div>	
		<?php $this->load->view("dependencies/scripts"); ?>
	</body>
</html>