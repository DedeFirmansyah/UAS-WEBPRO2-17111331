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
	         	<img src="<?php echo base_url('assets/img/icLogin.png') ?>" style="height: 100px; width: 100px; margin: auto;">
				<h2 class="card-title text-center mt-3">Login Admin</h2>
				<div class="card-body">
					<form method="post" action="<?php echo base_url('login/aksi_login') ?>">
	          			<div class="input-group mb-3">
	          				<div class="input-group-prepend">
	          					<span class="input-group-text">
	          						<i class="fa fa-user fa-2x"></i>
	          					</span>
	          				</div>
	          				<input type="text" class="form-control py-4" placeholder="Username" id="username" name="username" required>
	          			</div>
	          			<div class="input-group mb-3">
	          				<div class="input-group-prepend">
	          					<span class="input-group-text">
	          						<i class="fa fa-lock fa-2x"></i>
	          					</span>
	          				</div>
	          				<input type="password" class="form-control py-4" placeholder="Password" id="password" name="password" required>
	          			</div>
	          			<button class="btn btn-primary mb-2 mt-2 btn-login" style="width: 100%;">Login</button>
	          		 <div class="col-12 forgot text-center">
	         			 <a href="<?php echo base_url('LoginMahasiswa/') ?>">Login Mahasiswa?</a>
	        		</div>
	          		</form>
				</div>
				</div>
			</div>
		</div>
	</div>


  <!-- kaki -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>

    <!-- Popper js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <!-- bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>

</html>  
