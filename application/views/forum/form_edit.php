<!-- Middle Column -->
<div class="w3-col m7">
	<div class="w3-row-padding">
		<form action="<?php echo base_url() ?>forum/ubah" method="post" accept-charset="utf-8">
			<input type="hidden" name="id_thread" value="<?php echo $edited->id_thread ?>">
			<label>Judul</label>
			<input type="text" name="judul" value="<?php echo $edited->judul ?>" placeholder="">
			<br>
			<label>Isi</label>
			<input type="text" name="isi" value="<?php echo $edited->isi ?>" placeholder="">
			<input type="submit" name="Kirim" value="Kirim">
		</form>
	</div>
</div>