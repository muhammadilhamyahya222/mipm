<?php

session_start();

if( !isset($_SESSION["login_siswa"]) ){
    header("Location: login.php");
    exit;
}

require 'function.php';

// ambil data dari url
$id = $_SESSION["id"];

// query data anime
$data_siswa = query("SELECT * FROM data_siswa WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MIPM - Profil Siswa</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/icon.png" rel="icon">
  <link href="../assets/img/icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i>admin@mipm.sch.id
        <i class="icofont-phone phone-icon"></i> (0321) 851382
      </div>
      <div class="social-links">
        <!-- <a href="#" class="twitter"><i class="icofont-twitter"></i></a> -->
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <!-- <a href="#" class="skype"><i class="icofont-skype"></i></a> -->
        <!-- <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a> -->
      </div>
    </div>
  </section>


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Profil Siswa</h2>
          <ol>
            <li><a href="ubahProfil.php?id=<?= $_SESSION["id"];?>" class="btn btn-warning">Edit Data</a></li>
            <li><a href="logout.php" class="btn btn-danger">Logout</a></li>            
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="portfolio-description">
            <h2>Nama Siswa</h2>
            <p><?= $data_siswa ["nama"];?></p>

            <h2>Kelas</h2>
            <p><?= $data_siswa ["kelas"];?></p>

            <h2>Nomer Absen</h2>
            <p><?= $data_siswa ["no_urut"];?></p>

            <h2>Nomer Induk</h2>
            <p><?= $data_siswa ["no_induk"];?></p>

            <h2>Jenis Kelamin</h2>
            <p><?= $data_siswa ["jk"];?></p>

            <h2>Tempat Lahir</h2>
            <p><?= $data_siswa ["tmp_lahir"];?></p>

            <h2>Tanggal Lahir</h2>
            <p><?= $data_siswa ["tgl_lahir"];?></p>

            <h2>Anak Ke</h2>
            <p><?= $data_siswa ["anak_ke"];?></p>

            <h2>Jumlah Saudara</h2>
            <p><?= $data_siswa ["jml_sdr"];?></p>

            <h2>Alamat</h2>
            <p><?= $data_siswa ["alamat"];?></p>

            <h2>Nomer Telepon</h2>
            <p><?= $data_siswa ["tlp"];?></p>

            <h2>Nama Ayah</h2>
            <p><?= $data_siswa ["nama_ayah"];?></p>

            <h2>Nama Ibu</h2>
            <p><?= $data_siswa ["nama_ibu"];?></p>

            <h2>Pekerjaan</h2>
            <p><?= $data_siswa ["pekerjaan"];?></p>

            <h2>Pedp</h2>
            <p><?= $data_siswa ["pedp"];?></p>

            <h2>K.Ortu</h2>
            <p><?= $data_siswa ["k_ortu"];?></p>

            <h2>Asal Sekolah</h2>
            <p><?= $data_siswa ["asal_sekolah"];?></p>

            <h2>NISN</h2>
            <p><?= $data_siswa ["nisn"];?></p>

            <h2>Username</h2>
            <p><?= $data_siswa ["username"];?></p>

            <h2>Password</h2>
            <p><?= $data_siswa ["password"];?></p>   
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6">
            <div class="footer-info">
              <h3>MI Perguruan Mu’allimat</h3>
              <p>
                Jl. Masjid Jami', Diwek, Kecamatan Cukir, Kabupaten Jombang <br>
                Jatim 61471, Indonesia<br><br>
                <strong>Phone:</strong> (0321) 851382<br>
                <strong>Email:</strong> admin@mipm.sch.id<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2020 <strong><span>MI Perguruan Mu’allimat</span></strong> All rights Reserved.
      </div>
      <div class="credits">
        Designed by me
      </div>
    </div>
  </footer><!-- End Footer -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>