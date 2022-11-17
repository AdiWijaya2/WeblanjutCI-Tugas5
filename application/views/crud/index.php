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
              <a class="nav-link active" aria-current="page" href="<?php echo base_url('index.php/Aset/index') ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/Aset/project') ?>">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/Aset/info') ?>">Informasi</a>
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
        Data Aset
      </div>

      <div class="card-body">
        <?php echo $this->session->flashdata('pesan');
        ?>
        <div><a href="<?= site_url('Aset/tambahaset') ?>" class="btn btn-primary mb-2 btn-md rounded-3">Tambah Data</a>
          <form class="d-flex float-sm-end" role="search">
            <input class="form-control me-2 mb-4 rounded-5" type="search" placeholder="" aria-label="Search">
            <button class="btn btn-success mb-4 rounded-5" type="submit">Search</button>
          </form>
        </div>
        <table class="table table-bordered table-striped table-hover mt-sm-3">
          <thead class="text-center">
            <tr>
              <th scope="col">Nomor</th>
              <th scope="col">Nama Aset</th>
              <th scope="col">Jenis</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>

          <tbody class="text-center">
            <?php
            $nomor = 1;
            foreach ($dataaset as $item) {
            ?>
              <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $item->nama_aset; ?></td>
                <td><?php echo $item->jenis; ?></td>
                <td><?php echo $item->lokasi; ?></td>
                <td><?php echo $item->jumlah; ?></td>
                <td><?php echo anchor('Aset/edit/' . $item->id, '<div class="btn btn-warning btn-sm ms-1 mb-1">Edit</div>') ?>
                  <?php echo anchor('Aset/hapus_data/' . $item->id, '<div class="btn btn-danger btn-sm ms-1 mb-1">Delete</div>') ?>
                </td>

              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
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