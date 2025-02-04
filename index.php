<?php
include "lib/koneksi.php";
session_start();
if (isset($_SESSION['user_id'])) {
  $nama = $_SESSION['nama_lengkap'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- font google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!--My style -->
  <link rel="stylesheet" href="css/style.css" />

  <!-- Responsive style -->
  <link rel="stylesheet" href="css/responsive.css" />

  <!-- Logo title -->
  <link rel="stylesheet" href="Assets/img/logoRumahimpian.png" type="img/x-icon" />

  <title>SmartClean AC</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
    <div class="container">
      <a class="navbar-brand" href="#">SmartCleanAC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
          </li>
          <li class="nav-item ms-2">
            <a class="nav-link" href="page/tentangkami.php">Tentang Kami</a>
          </li>
          <li class="nav-item ms-2">
            <a class="nav-link" href="page/layanan.php">Layanan</a>
          </li>
          <li class="nav-item ms-2">
            <a class="nav-link" href="page/contact.php">Contact</a>
          </li>
        </ul>

        <div class="d-flex ms-1">
          <a href="login/login.php">
            <button class="button-primary me-2">Daftar</button>
          </a>
          <?php
          if (isset($_SESSION['user_id'])) {
          ?>
            <a href="page/profile.php" class="profile">
              <button class="button-secondary">Profile</button>
            </a>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </nav>

  <!--  Hero Section -->
  <section id="hero">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-md-6 hero-tagline my-auto">
          <h1>Susah Nyari Jasa AC yang di percaya?</h1>
          <p>
            <span class="fw-bold">CLEAR - AC </span>Merupakan solusi yang di
            percaya di indonesia AC Bersih dan Sejuk menjadikan udara ruangan
            higenis
          </p>
          <a href="layanan.html">
            <button class="button-lg-primary">Pesan Layanan kami</button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Statistik Penjualan -->
  <section id="statistik">
    <div class="container mb-3">
      <div class="row mb-2">
        <div class="judul col-12 text-center mb-4">
          <h2>STATISTIK PENJUALAN</h2>
        </div>
      </div>
      <div class="row mt-4 justify-content-center">
        <div class="col-md-6 text-center">
          <div class="card-statistik">
            <div class="circle-icon position-relative mx-auto">
              <img src="Assets/img/icon statistik1.png" alt="" class="position-absolute top-50 start-50 translate-middle" />
            </div>
            <h4 class="mt-3 count-up" data-target="10204">10.204</h4>
            <h3 class="mt-4">Unit AC</h3>
          </div>
        </div>
        <div class="col-md-6 text-center">
          <div class="card-statistik">
            <div class="circle-icon position-relative mx-auto">
              <img src="Assets/img/icon statistik2.png" alt="" class="position-absolute top-50 start-50 translate-middle" />
            </div>
            <h4 class="mt-3 count-up" data-target="4269">4.269</h4>
            <h3 class="mt-4">layanan customer</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- cara pemesanan -->
  <section id="pemesanan">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="my-5">Bagaimana Cara Memesan Layanan Kami?</h2>
      </div>
      <div class="row mt-4 text-center justify-content-center">
        <div class="col-md-3 mt-5">
          <img style="width: 166px; height: 192px" src="Assets/img/Lihat layanan.png" alt="" />
          <h3 class="mt-2">lihat layanan</h3>
          <span>Sudah ingin memesan? daftarkan diri anda berikan lokasi anda
            serta nomor telepon anda</span>
        </div>
        <div class="col-md-3 mt-5">
          <img style="width: 240px; height: 183px" src="Assets/img/daftar.png" alt="" />
          <h3 class="mt-3">Daftar</h3>
          <span>Pilih tanggal yang tersedia pada kalender sesuai dengan kebutuhan
            Anda.</span>
        </div>
        <div class="col-md-3 mt-5">
          <img style="width: 216px; height: 174px" src="Assets/img/Tentukan tanggal.png" alt="" />
          <h3 class="mt-4">Tentukan Tanggal</h3>
          <span>Dengan senang hati melayani semua pertanyaan Anda mengenai
            layanan kami.</span>
        </div>
        <div class="col-md-3 mt-5">
          <img style="width: 222px; height: 190px" src="Assets/img/hubungi_kami.png" alt="" />
          <h3>lihat layanan</h3>
          <span>Kami menawarkan layanan perawatan AC yang cepat dan
            profesional.</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Search section -->

  <!-- Rekomendasi section -->
  <section id="layanan">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 text-center mt-5">
          <h2 class="mb-5">Layanan Kami</h2>
        </div>
      </div>
      <div class="row mt-4">
        <!-- card 1 -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
          <div class="card mb-4 p-2" style="width: 400px">
            <img src="Assets/img/layana_kami1.png" alt="" />
            <div class="card-body">
              <h4 class="mb-3">CUCI AC PK 0.5 - 1 PK</h4>
              <h3 class="mt-4">RP 75.000/Unit</h3>
              <button class="mt-4" style="
                    width: 219px;
                    height: 64px;
                    font-size: 24px;
                    border-radius: 10px;
                  ">
                Pesan Sekarang
              </button>
            </div>
          </div>
        </div>
        <!-- card 2 -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
          <div class="card p-2" style="width: 22rem">
            <img src="Assets/img/layana_kami2.png" alt="" />
            <div class="card-body">
              <h4 class="mb-3">CUCI AC PK 1.5 - 2 PK</h4>
              <h3 class="mt-4">RP 85.000/Unit</h3>
              <button class="mt-4" style="
                    width: 219px;
                    height: 64px;
                    font-size: 24px;
                    border-radius: 10px;
                  ">
                Pesan Sekarang
              </button>
            </div>
          </div>
        </div>
        <!-- card 3 -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
          <div class="card p-2" style="width: 22rem">
            <img src="Assets/img/layana_kami3.png" alt="" />
            <div class="card-body">
              <h4 class="mb-3">CUCI AC Inverter 0.5 - 2 PK</h4>
              <h3 class="mt-4">RP 95.000/Unit</h3>
              <button class="mt-4" style="
                    width: 219px;
                    height: 64px;
                    font-size: 24px;
                    border-radius: 10px;
                  ">
                Pesan Sekarang
              </button>
            </div>
          </div>
        </div>
        <!-- card 4 -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
          <div class="card p-2" style="width: 22rem">
            <img src="Assets/img/layana_kami4.png" alt="" />
            <div class="card-body">
              <h4 class="mb-3">ISI / ISI Ulang AC</h4>
              <h3 class="mt-4">RP 110.000/Unit</h3>
              <button class="mt-4" style="
                    width: 219px;
                    height: 64px;
                    font-size: 24px;
                    border-radius: 10px;
                  ">
                Pesan Sekarang
              </button>
            </div>
          </div>
        </div>
        <!-- card 5 -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
          <div class="card p-2" style="width: 22rem">
            <img src="Assets/img/layana_kami5.png" alt="" />
            <div class="card-body">
              <h4 class="mb-3">SERVICE AC PK 1.5 - 2 PK</h4>
              <h3 class="mt-4">RP 2000.000/Unit</h3>
              <button class="mt-4" style="
                    width: 219px;
                    height: 64px;
                    font-size: 24px;
                    border-radius: 10px;
                  ">
                Pesan Sekarang
              </button>
            </div>
          </div>
        </div>
        <!-- card 6 -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
          <div class="card p-2" style="width: 22rem">
            <img src="Assets/img/layana_kami6.png" alt="" />
            <div class="card-body">
              <h4 class="mb-3">SERVICE AC Inverter 0.5 - 2 PK</h4>
              <h3 class="mt-4">RP 95.000/Unit</h3>
              <button class="mt-4" style="
                    width: 219px;
                    height: 64px;
                    font-size: 24px;
                    border-radius: 10px;
                  ">
                Pesan Sekarang
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer class="d-flex align-items-center position-relative">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-7 d-flex justify-content-lg-start justify-content-center">
            <a href="#">SmartCleanAC</a>
            <p style="margin-left: -15rem; font-size: 18px">
              Kami mengerti bahwa masalah AC bisa terjadi kapan saja, bahkan
              di tengah malam atau akhir pekan. Itulah mengapa kami
              menyediakan pelayanan darurat 24/7 yang siap membantu Anda
              dengan cepat. Percayakan kami untuk menyelesaikan masalah AC
              Anda dengan profesionalisme dan keahlian kami.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/script.js"></script>

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