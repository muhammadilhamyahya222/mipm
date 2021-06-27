<?php

session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: loginAdmin.php");
    exit;
}

require 'function-Admin.php';
$gambar = query("SELECT * FROM gambar ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MI Perguruan Mu'allimat</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/icon.png" rel="icon">
  <link href="../assets/img/icon.png" rel="icon">

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

        <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Semua Gambar</h2>
          <ol>
            <li><a href="index.php" class="btn btn-primary">Kembali</a></li>
          </ol>
        </div>

      </div>
    </section>
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Galeri</span>
          <h2>Galeri</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-prestasi">Prestasi</li>
              <li data-filter=".filter-acara">Acara</li>
              <li data-filter=".filter-pembelajaran">Pembelajaran</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          <?php foreach($gambar as $row) : ?>
          <a href="readGambar.php?id=<?= $row["id"];?>">
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $row["kategori"];?>">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/<?= $row["gambar1"];?>" class="img-fluid" alt="<?= $row["nama_gambar"];?>">
              <div class="portfolio-info">
                <h4 style="text-transform: capitalize"><?= $row["kategori"];?></h4>
                <p style="text-transform: capitalize"><?= $row["kategori"];?></p>
              </div>
            </div>
            <br>
            <a href="ubahGambar.php?id=<?= $row["id"];?>" class="badge badge-warning">Ubah</a>
            <a href="hapusGambar.php?id=<?= $row["id"];?>" class="badge badge-danger" onclick=" return confirm('Hapus file ?');">Hapus</a>
          </div>
          </a>
          <?php endforeach; ?>
        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->
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
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mybiz-free-business-bootstrap-theme/ -->
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