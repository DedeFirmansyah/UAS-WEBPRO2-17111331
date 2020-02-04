 <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">YOUR PARTNER TO <br><span>GLOBAL</span> COMPETITION</h1>
      </div>
    </div>
  <!-- jumbotron -->

  <!-- container profile -->
  <div id="profile">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 panel">
            <h2>Profile</h2>
			<div class="row justify-content-center">
				<div class="col-lg">
					<img src="<?php echo base_url('assets/img/nama.png') ?>" alt="Nama">
					<h4 class="mt-3">Nama : </h4>
					<p><?= $datamhs['nama'] ?></p>
				</div>
				<div class="col-lg">
					<img src="<?php echo base_url('assets/img/npm.png') ?>" alt="Nama">
					<h4 class="mt-3">Npm : </h4>
					<p><?= $datamhs['npm'] ?></p>
				</div>
				<div class="col-lg">
					<img src="<?php echo base_url('assets/img/semester.png') ?>" alt="Nama">
					<h4 class="mt-3">Semester : </h4>
					<p><?= $datamhs['semester'] ?></p>
				</div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- container tambah data -->
