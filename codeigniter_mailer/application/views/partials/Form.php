<div class="w-75 p-5 mt-5 mb-5 card rounded" style="display:flex; margin:auto;">
	<form action="<?php echo base_url("FirstController/sendMail")?>" method="post">
		<div class="mt-4">
			<label for="sender" class="form-label">Gönderici</label>
			<input type="text" class="form-control" name="sender" autocomplete="false" required autofocus>
		</div>
		<div class="mt-4">
			<label for="mailtoadress" class="form-label">Mail Gönderilecek Adres</label>
			<input type="text" class="form-control" name="mailtoadress" autocomplete="false" required>
		</div>
		<div class="mt-4">
		  <label for="mail_title" class="form-label">Konu</label>
		  <textarea class="form-control" name="mail_title" rows="2" required></textarea>
		</div>
		<div class="mt-4">
		  <label for="mail_content" class="form-label">Mesaj</label>
		  <textarea class="form-control" name="mail_content" rows="5" required></textarea>
		</div>
		<div class="mt-4">
			<button type="submit" name="send_mail" class="btn btn-success"style="display:flex; margin:auto;">Gönder</button>
		</div>
	</form>
</div>