<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="../css/tkm.css" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <title>SmartCleanAC</title>
  <style>
    .sidebar {
      background-color: #f8f9fa;
      border-radius: 10px;
      padding: 20px;
    }

    .form-container {
      background-color: #f8f9fa;
      border-radius: 10px;
      padding: 20px;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark position-fixed w-100">
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
        <div class="d-flex ms-1">
          <a href="login/login.html">
            <button class="button-primary me-2">Daftar</button>
          </a>
          <button class="button-secondary">Profile</button>
        </div>
      </div>
    </div>
  </nav>
  <!-- Sidebar -->
  <div class="sidebar" style="background-color: #1783ff">
    <h4>Akun Saya</h4>
    <div class="profile-info mt-3">
      <div class="ctf ms-2">
        <a href="">
          <img src="../Assets/img/icn_profile.png" alt="" />
          <span>Profile Saya</span>
        </a>
      </div>
      <div class="ctf me-2">
        <a href="alamat.html">
          <img src="../Assets/img/icon_maps.png" alt="" />
          <span>Alamat</span>
        </a>
      </div>
      <div class="ctf">
        <a href="">
          <img style="color: #fff" src="../Assets/img/icon_pw.png" alt="" />
          <span>Ubah Password</span>
        </a>
      </div>
      <div>
        <span>Pesanan Saya</span>
      </div>
      <div class="ctf mt-2">
        <a href=""><img style="color: #fff" src="../Assets/img/icon_dompet.png" alt="" />
          <span>Menunggu Pembayaran</span>
        </a>
      </div>
      <div class="ctf">
        <a href="">
          <img style="color: #fff" src="../Assets/img/icon_transaksi.png" alt="" />
          <span>Daftar Transaksi</span>
        </a>
      </div>
      <div class="ctf ms-1">
        <a href="../login/logout.php">
          <img style="color: #fff" src="../Assets/img/icon_logout.png" alt="" />
          <span>Logout</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content container pt-5">
    <div class="row justify-content-center mt-4 mb-5">
      <div class="col-md-8">
        <div class="form-container">
          <h3>Profile Saya</h3>
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" value="John Doe" required />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" value="johndoe@example.com" required />
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Nomor Telepon</label>
              <input type="tel" class="form-control" id="phone" value="+62 123-4567-890" required />
            </div>
            <div class="mb-3">
              <label for="date" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control" id="date" required />
            </div>
            <div class="mb-3">
              <label for="service" class="form-label">Jenis Kelamain</label>
              <select class="form-select" id="service" required>
                <option value=""></option>
                <option value="cleaning">Laki-laki</option>
                <option value="repair">Perempuan</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary w-40 mt-5" style="margin-left: 19rem">
              Simpan Perubahan
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

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