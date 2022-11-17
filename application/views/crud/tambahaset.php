<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambahkan Data</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
</head>

<body>

    <div class="d-flex justify-content-center mt-5">
        <div class="card" style="width: 35rem ;">
            <div class="card-header bg-secondary bg-opacity-25 text-center fw-bold text-uppercase">
                Form Data Aset
            </div>

            <div class="card-body">
                <form action="<?= site_url('Aset/prosestambah') ?>" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Aset</label>
                        <input type="text" class="form-control opacity-75 rounded-3 p-1" name="txtnama">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jenis</label>
                        <input type="text" class="form-control opacity-75 rounded-3 p-1" name="txtjenis">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Lokasi</label>
                        <input type="text" class="form-control opacity-75 rounded-3 p-1" name="txtlokasi">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah</label>
                        <input type="text" class="form-control opacity-75 rounded-3 p-1 mb-5" name="txtjumlah">
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <input type="Reset" value="Bersihkan" class="btn btn-danger ms-2 ">
                    <a href="<?= site_url('Aset/index') ?>" class="btn btn-warning ms-2">Kembali</a>
            </div>
            </form><br>
        </div>

</body>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>

</html>