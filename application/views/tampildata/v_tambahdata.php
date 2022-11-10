<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jadwal Perkuliahan </title>
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-secondary bg-opacity-25">
      <div class="container-fluid">
        <a class="navbar-brand">Tugas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo base_url('index.php/kelascontroller/index') ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/kelascontroller/tambahdata') ?>">Tambah Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/kelascontroller/project') ?>">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/kelascontroller/info') ?>">Informasi</a>
            </li>
          </ul>
          <span class="navbar-text">
            2001050006
          </span>
        </div>
      </div>
  </div>
  </nav><br>

  <div class="d-flex justify-content-center col-12">
    <div class="card col-6">
      <div class="card-header bg-secondary bg-opacity-25 text-center">
        Form Data Mahasiswa
      </div><br>
      <div class="container">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nim</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div>
            <label for="exampleInputPassword1" class="form-label">Program Studi</label>
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>--Pilih--</option>
              <option value="1">D3 RPL</option>
              <option value="2">S1 Ilkom</option>
              <option value="3">S1 Manajemen</option>
              <option value="3">D3 S1</option>
              <option value="3">D3 Akuntansi</option>
            </select>
          </div>
          <br>
          <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button">Simpan</button>
            <button class="btn btn-danger" type="button">Batal</button>
          </div>
        </form><br><br>
      </div>
    </div>
  </div>
  </div>
</body>
<br><br>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>
<script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>

</html>