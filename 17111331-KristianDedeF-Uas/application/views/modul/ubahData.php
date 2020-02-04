<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/Css/style.css') ?>" type="text/css"> 
</head>
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<body>
<div class="container" style="padding: 15px;">
	<?php if (empty($datamhs)): 
		redirect(base_url().'Myadmin');
		endif; 
	?>
	 <h2 align="center">Ubah Data</h2>
     <hr width="24%" size="10px" color="lightgrey">
	<form method="POST" action="<?php echo base_url('Myadmin/aksi_ubah_data') ?>">
		<input type="number" name="id" value="<?= $datamhs['id'] ?>" hidden>
		<div class="form-group">
			<label for="Npm">NPM :</label>
			<input type="number" class="form-control" id="npm" name="npm" maxlength="11" value="<?= $datamhs['npm'] ?>" required>
		</div>
		<div class="form-group">
			<label for="Nama">Nama :</label>
			<input type="text" class="form-control" id="nama" name="nama" value="<?= $datamhs['nama'] ?>" required>
		</div>
		<div class="form-group">
			<label for="semester">Semester :</label>
			<select name="semester" class="form-control"> 
				<option value="<?= $datamhs['semester'] ?>">Semester <?= $datamhs['semester'] ?></option>
				<?php for ($i=1; $i < 9 ; $i++) { ?>
					<option value="<?php echo $i; ?>">Semester <?php echo $i; ?></option>
				<?php } ?>
			</select>
		</div>
		<button type="submit" value="Submit" class="btn btn-primary float-left">Simpan</button>
	</form>
</div>
</body>

</html>