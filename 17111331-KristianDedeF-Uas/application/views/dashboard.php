  <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">YOUR PARTNER TO <br><span>GLOBAL</span> COMPETITION</h1>
      </div>
    </div>
  <!-- jumbotron -->

  <!-- container tambah data -->
  <div id="tambah-data">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 panel">
            <h2>Tambah Data</h2>
                <form method="POST" action="<?php echo base_url('Myadmin/aksi_tambah_data') ?>">
                  <div class="form-group">
                    <label for="Npm">NPM :</label>
                    <input type="number" class="form-control" id="npm" name="npm" maxlength="8" placeholder="Masukan Npm . . . " required>
                  </div>
                  <div class="form-group">
                    <label for="Nama">Nama :</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama . . . " required>
                  </div>
                  <div class="form-group">
                    <label for="semester">Semester :</label>
                    <select class="form-control" name="semester"> 
                      <option value="">Pilih Semester . . .</option>
                      <?php for ($i=1; $i < 9 ; $i++) { ?>
                        <option value="<?php echo $i; ?>">Semester <?php echo $i; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                    <button type="submit" value="Submit" class="btn btn-primary float-right">Simpan</button>    
                </form>  
          </div>
        </div>
      </div>
  </div>
  <!-- container tambah data -->

  <!-- container mahasiswa -->
  <div id="mahasiswa">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-lg-10">
           <?php if ($this->session->flashdata('flash')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa telah <?= $this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
          <h2>Data Mahasiswa</h2>
          <hr width="24%" size="10px" color="lightgrey">
          <?php if (empty($tampil)): ?>
                  <div class="alert alert-danger" role="alert">
                       Data mahasiswa tidak ditemukan
                  </div>
          <?php endif; ?>
          <table class="table table-hover" id="table-data">
            <thead class="thead-light">
              <tr>
                <th scope="col">No</th>
                <th scope="col">npm</th>
                <th scope="col">Nama</th>
                <th scope="col">semester</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach ($tampil as $tpl) { 
              ?>
              <tr>
                <th scope="row"><?= $no ?></th>
                <td><?= $tpl->npm ?></td>
                <td><?= $tpl->nama ?></td>
                <td><?= $tpl->semester ?></td>
                <td>
                  <a href="<?= base_url('Myadmin/UbahData/'.$tpl->id) ?>">
                    <i class='fa fa-edit' style='font-size:24px'> |</i>
                  </a>
                  <a href="<?= base_url('Myadmin/aksi_hapus_data/'.$tpl->id) ?>" onclick="return confirm('yakin akan menghapus anggota ?');">
                    <i class='fa fa-eraser' style='font-size:24px'></i>
                  </a>
                </td>
              </tr>
              <?php
                $no++;
              }?>
            </tbody>
          </table> 
          <script>
              $(document).ready(function(){
                  $('#table-data').DataTable();
              });
          </script>
          </div>
      </div>
    </div>
  </div>
  <!-- container mahasiswa -->


