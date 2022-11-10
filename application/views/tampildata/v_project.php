<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Perkuliahan </title>
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

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="">
          <div class="card-body">
            <h5 class="card-header">Rincian Tugas</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, amet.</p>
            <ol class="list-group list-group-numbered">
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Pemrograman Web Lanjut</div>
                  <a href="#" class="card-link">Klik disini</a><br>
                </div>
                <span class="badge bg-primary rounded-pill">1</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Pemrograman Visual Lanjut</div>
                  <a href="#" class="card-link">Klik disini</a><br>
                </div>
                <span class="badge bg-primary rounded-pill">1</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Pemrograman Mobile</div>
                  <a href="#" class="card-link">Klik disini</a><br>
                </div>
                <span class="badge bg-primary rounded-pill">1</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Analisa & Riset TI</div>
                  <a href="#" class="card-link">Klik disini</a><br>
                </div>
                <span class="badge bg-primary rounded-pill">1</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Pengujian Aplikasi</div>
                  <a href="#" class="card-link">Klik disini</a><br>
                </div>
                <span class="badge bg-primary rounded-pill">1</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Laporan KKP</div>
                  <a href="#" class="card-link">Klik disini</a><br>
                </div>
                <span class="badge bg-primary rounded-pill">1</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Tugas Akhir</div>
                  <a href="#" class="card-link">Klik disini</a><br>
                </div>
                <span class="badge bg-primary rounded-pill">999</span>
              </li>
            </ol><br><br>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card">
          <div class="card">
            <div class="card-header bg-secondary bg-opacity-25 text-center">Jadwal Perkuliahan D3RPL Semester V</div>
            <img src="../../assets/img/jadwal.jpeg" class="img-fluid" alt="">
          </div>
        </div><br>
      </div>

      <div class="col-sm-3">
        <div class="">
          <div class="card-body">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Project #1
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Project #2
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Project #3
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
              </div>
            </div>
            <br>
            <div class="container">
              <nav aria-label="...">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link" href="<?php echo base_url('index.php/mahasiswa/tambahdata') ?>">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="<?php echo base_url('index.php/mahasiswa/index') ?>">1</a></li>
                  <li class="page-item"><a class="page-link" href="<?php echo base_url('index.php/mahasiswa/tambahdata') ?>">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="<?php echo base_url('index.php/mahasiswa/project') ?>">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="<?php echo base_url('index.php/mahasiswa/info') ?>">Next</a>
                  </li>
                </ul>
              </nav><br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>

</html>