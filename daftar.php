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
    <h4 class="text-center">Pendaftaran Peserta Didik Baru SMK PGRI WLINGI <br> Tahun 2025</h4>
    <!-- navbar -->
    <nav class="navbar bg-dark navbar-expand-lg bg-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PPDB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">Beranda</a>
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
      <div class="card mt-4">
        <div class="card-header">
          Biodata
        </div>
        <div class="card-body">
          <form action="hasil1.php" method="post">
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Peserta</label>
              <div class="col-sm-10">
                <input name="viewport" class="form-control" id="inputEmail3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat Lahir</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Asal Sekolah</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Jurusan yang Dipilih</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3">
              </div>
            </div>
            <h6>Nilai </h6>
            <div class="row">
              <div class="col-4">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Matematika</label>
                    <input name="Matematika" type="number" class="form-control" id="exampleInputNumber" aria-describedby="numberHelp">
                  </div>
              </div>
              <div class="col-4">
                    <label for="exampleInputEmail1" class="form-label">Bahasa Indonesia</label>
                    <input name="Bahasa_Indonesia" type="number" class="form-control" id="exampleInputNumber" aria-describedby="numberHelp">

              </div>
              <div class="col-4">
                     <label for="exampleInputEmail1" class="form-label">Bahasa Inggris</label>
                    <input name="Bahasa_Inggris"type="number" class="form-control" id="exampleInputNumber" aria-describedby="numberHelp">

              </div>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
          </form>
        </div>
      </div>
    </div>

    <!-- footer -->
    <nav class="navbar bg-dark sticky-bottom bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <p class="navbar-brand text-center" href="#">Dibuat Oleh: Nata & Kanip</a>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>