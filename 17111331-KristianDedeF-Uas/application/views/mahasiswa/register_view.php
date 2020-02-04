<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title?></title>
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css') ?>">
</head>

<body background="<?php echo base_url('assets/img/background.jpg') ?>">
		<?php if ($this->session->flashdata('msg')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('msg');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
		<?php endif; ?>
	<div class="row">
		<div class="col-lg-5 m-auto">
			<div class="card mt-5 bg-light login" style="padding-top: 30px;">
				<h2 class="card-title text-center mt-3">Register Mahasiswa</h2>
				<div class="card-body">
					<form method="post" action="<?php echo base_url('LoginMahasiswa/aksi_register') ?>">
	          			<div class="input-group mb-3">
	          				<div class="input-group-prepend">
	          					<span class="input-group-text">
	          						<i class="fa fa-user fa-2x"></i>
	          					</span>
	          				</div>
	          				<input type="text" class="form-control py-4" id="npm" name="npm" placeholder="Npm" required>
	          			</div>
	          			<div class="input-group mb-3">
	          				<div class="input-group-prepend">
	          					<span class="input-group-text">
	          						<i class="fa fa-lock fa-2x"></i>
	          					</span>
	          				</div>
	          				<input type="password" class="form-control py-4" id="password" name="password" placeholder="Password" required>
	          			</div>
	          			<button class="btn btn-primary mb-2 mt-2 btn-login" style="width: 100%;">Daftar</button>
	          		 <div class="col-12 forgot text-center">
	         			<label>Sudah punya akun ? <a href="<?php echo base_url('LoginMahasiswa/')?>">Login Disini</a></label>
	        		</div>
	          		</form>
				</div>
				</div>
			</div>
		</div>
	</div>
