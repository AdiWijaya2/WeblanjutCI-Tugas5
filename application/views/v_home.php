<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas3-WeblanjutCI</title>
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
              <a class="nav-link active" aria-current="page" href="<?php echo base_url('index.php/mahasiswa/index') ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/mahasiswa/tambahdata') ?>">Tambah Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/mahasiswa/project') ?>">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/mahasiswa/info') ?>">Informasi</a>
            </li>
          </ul>
          <span class="navbar-text">
            2001050006
          </span>
        </div>
      </div>
  </div>
  </nav><br>

  <div class="container">
    <p class="alert alert-info text-success text-center fs-5 fw-semibold" role="alert">
      I Wayan Mustika Nayottama Adi Wijaya
    </p>
  </div>

  <div class="container">
    <div class="card">
      <div class="card-header bg-secondary bg-opacity-25">
        Data Mahasiswa
      </div>

      <div class="card-body">
        <table class="table table-bordered">
          <thead class="text-center">
            <tr>
              <th scope="col">Nomor</th>
              <th scope="col">Nama</th>
              <th scope="col">Nim</th>
              <th scope="col">Alamat</th>
              <th scope="col">Program Studi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td scope="row">1</td>
              <td>Adi</td>
              <td>2001050006</td>
              <td>Cakra Selatan</td>
              <td>D3 RPL</td>
              <td><button type="button" class="btn btn-warning btn-sm">Edit</button>
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
              </td>
            </tr>
            <tr>
              <td scope="row">2</td>
              <td>Dhira</td>
              <td>2001050004</td>
              <td>Karang Baru</td>
              <td>D3 RPL</td>
              <td><button type="button" class="btn btn-warning btn-sm">Edit</button>
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
              </td>
            </tr>
            <tr>
              <td scope="row">3</td>
              <td>Ari</td>
              <td>2001050001</td>
              <td>Seganteng</td>
              <td>D3 RPL</td>
              <td><button type="button" class="btn btn-warning btn-sm">Edit</button>
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
              </td>
            </tr>
            <tr>
              <td scope="row">4</td>
              <td>Novi</td>
              <td>2001050008</td>
              <td>Karang Baru</td>
              <td>D3 RPL</td>
              <td><button type="button" class="btn btn-warning btn-sm">Edit</button>
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
              </td>
            </tr>
            <tr>
              <td scope="row">5</td>
              <td>Aan</td>
              <td>2001050005</td>
              <td>Lotim</td>
              <td>D3 RPL</td>
              <td><button type="button" class="btn btn-warning btn-sm">Edit</button>
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <br>

  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-3 text-muted">© Created By Adi Wijaya</p>

      <ul class="nav col-md-4 mb-3 justify-content-end">
        <a class="navbar-brand ms-3" href="https://wa.me/62895394454712/">
          <img src="../../assets/img/wa.png" width="27" height="27">
        </a>
        <a class="navbar-brand ms-3" href="https://www.instagram.com/nyttama.id/">
          <img src="../../assets/img/ig.png" width="27" height="27">
        </a>
        <a class="navbar-brand ms-3" href="https://www.github.com/AdiWijaya2/">
          <img src="../../assets/img/github.png" width="27" height="27">
        </a>
    </footer>
  </div>
</body>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>

</html>