<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/tkm.css" />

  <!-- font google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <title>SmartCleanAC</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark  position-fixed w-100">
    <div class="container">
      <a class="navbar-brand" href="#">SmartCleanAC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">Beranda</a>
          </li>
          <li class="nav-item ms-2">
            <a class="nav-link" href="tentangkami.php">Tentang Kami</a>
          </li>
          <li class="nav-item ms-2">
            <a class="nav-link" href="layanan.php">Layanan</a>
          </li>
          <li class="nav-item ms-2">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>

        <div class="d-flex ms-1 ">
          <button class="button-primary me-2  ">Daftar</button>
          <button class="button-secondary">Profile</button>
        </div>
      </div>
    </div>
  </nav>
  <!-- Content Section -->
  <div>
    <div class="row">
      <div class="col-12">
        <h2 class="text-center" style="margin-top: 6rem;">Hubungi kami</h2>
      </div>
    </div>
    <div class="row justify-content-center mt-4 mb-5">
      <div class="col-md-6 text-center" style="background-color: #1783FF; width: 447px; height: 256px; border-radius: 10px;">
        <h1 style="color: #fff; margin-top: 6rem;">smartcleanac</h1>
      </div>
      <div class="col-md-4 d-flex align-items-center">
        <div>
          <div class="contact-info d-flex align-items-center mb-3">
            <div class="ellipse">
              <img style="width: 30px; height: 40px;" src="../Assets/img/icon_lokasi.png" alt="Lokasi" class="center-img">
            </div>
            <p>Alamat: Jl. Contoh No.123, Jakarta</p>
          </div>
          <div class="contact-info d-flex align-items-center mb-3">
            <div class="ellipse">
              <img src="../Assets/img/tlpn_icon.png" alt="Telepon" class="center-img">
            </div>
            <p>Telepon: +62 123-4567-890</p>
          </div>
          <div class="contact-info d-flex align-items-center">
            <div class="ellipse">
              <img src="../Assets/img/icon_email.png" alt="Email" class="center-img">
            </div>
            <p>Email: info@smartcleanac.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero Section -->
  <div class="ct">
    <h1>Punya Pertanyaan?</h1>
    <form>
      <div class="mb-3">
        <h3>Nama</h3>
        <input style="width: 493px; height: 79;" type="text" class="form-control" id="name" placeholder="">
      </div>
      <div class="mb-3">
        <h3>Email</h3>
        <input type="email" class="form-control" id="email" placeholder="">
      </div>
      <div class="mb-3">
        <h3>Pesan</h3>
        <textarea class="form-control" id="message" rows="3" placeholder=""></textarea>
      </div>
    </form>
    <button style="width: 225px; height: 69px;" type="submit" class="btn btn-light">Sumbit</button>

  </div>

  <!-- footer -->
  <footer class="d-flex align-items-center position-relative">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-7 d-flex  justify-content-lg-start  justify-content-center">
            <a href="#">SmartCleanAC</a>
            <p style="margin-left: -15rem; font-size: 18px;">
              Kami mengerti bahwa masalah AC bisa terjadi kapan saja, bahkan di tengah malam atau akhir pekan. Itulah mengapa kami menyediakan pelayanan darurat 24/7 yang siap membantu Anda dengan cepat.
              Percayakan kami untuk menyelesaikan masalah AC Anda dengan profesionalisme dan keahlian kami.
            </p>
          </div>

        </div>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>