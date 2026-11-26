<?php
  $nama_pendaftar=$_POST['nama_pendaftar'];
  $tempat_lahir=$_POST['tempat_lahir'];
  $tanggal_lahir=$_POST['tanggal_lahir'];
  $asal_sekolah=$_POST['asal_sekolah'];
  $jurusan_yang_dipilih=$_POST['jurusan_yang_dipilih'];
  $matematika=$_POST['matematika'];
  $bahasa_indonesia=$_POST['bahasa_indonesia'];
  $bahasa_inggris=$_POST['bahasa_inggris'];
  $rata_rata=($matematika+$bahasa_indonesia+$bahasa_inggris)/3;
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <!-- header -->
    <h4 class="text-center">Pendaftaran Peserta Didik Baru SMK PGRI Wlingi <br/>Tahun 2025</h4>

    <!-- navbar -->
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PPDB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="daftar.php">Pendaftaran</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- konten -->
  <div class="container">
   <div class="card mt-3">
     <div class="card-header bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="text-light">
          <h5>Biodata Pendaftar SMK PGRI WLINGI</h5><p><h6>Tahun 2025</h6></p>
        </div>
      </div>
      <div class="card-body">
        <p><b>Nama Pendaftar:</b> <?php echo $nama_pendaftar;?></p>
        <p><b>Tempat Lahir:</b> <?php echo $tempat_lahir, $tanggal_lahir;?></p>
        <p><b>Tanggal Lahir:</b> <?php echo $asal_sekolah;?><p>
         <p><b>Asal:</b> <?php echo $asal_sekolah;?><p>         
        <p><b>Jurusan yang Dipilih:</b> <?php echo $jurusan_yang_dipilih;?><p>
        <p><h5>Nilai:</h5></p>
        <div class="row">
            <div class="col-4">
              <div class="mb-3">
        <p><b>Matematika:</b> <?php echo $matematika;?><p>
              </div>
            </div>
            <div class="col-4">
              <div class="mb-3">
        <p><b>Bahasa Indonesia:</b> <?php echo $bahasa_indonesia;?><p>
              </div>
            </div>
            <div class="col-4">
              <div class="mb-3">
        <p><b>Bahasa Inggris:</b> <?php echo $bahasa_inggris;?><p>
              </div>
            </div>
        </div>
        <p><h5>Nilai Rata-rata:</h5></p>
        <p><b>Rata-rata Nilai:</b> <?php echo $rata_rata;?><p>
      </div>
    </div>
  </div>
    <!-- footer -->
    <nav class="navbar fluid-bottom bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid justify-content-center">
            <p class = "text-center text-light">Dibuat Oleh</p>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>