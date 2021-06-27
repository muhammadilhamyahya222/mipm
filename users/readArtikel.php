<?php

require 'function.php';

// ambil data dari url
$id = $_GET["id"];

// query data anime
$artikel = query("SELECT * FROM artikel WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MIPM - <?= $artikel["judul"];?></title>
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
          <h2>Detail Artikel</h2>
          <ol>
            <li><a href="../index.php" class="btn btn-primary">Kembali</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">
          <?php if (!$artikel["gambar1"] && !$artikel["gambar2"] && !$artikel["gambar3"]){ ?>
          <div class="owl-carousel portfolio-details-carousel">
            <div style="display: none;"></div>
          </div>
          <?php }elseif (!$artikel["gambar2"] && !$artikel["gambar3"]){ ?>
          <div class="owl-carousel portfolio-details-carousel">
            <img src="../assets/img/artikel/<?= $artikel["gambar1"];?>" class="img-fluid" alt="">
          </div>
          <?php } elseif (!$artikel["gambar3"]) {?>
          <div class="owl-carousel portfolio-details-carousel">
            <img src="../assets/img/artikel/<?= $artikel["gambar1"];?>" class="img-fluid" alt="">
            <img src="../assets/img/artikel/<?= $artikel["gambar2"];?>" class="img-fluid" alt="">
          </div>
          <?php } else {?>
          <div class="owl-carousel portfolio-details-carousel">
            <img src="../assets/img/artikel/<?= $artikel["gambar1"];?>" class="img-fluid" alt="">
            <img src="../assets/img/artikel/<?= $artikel["gambar2"];?>" class="img-fluid" alt="">
            <img src="../assets/img/artikel/<?= $artikel["gambar3"];?>" class="img-fluid" alt="">
          </div>
          <?php } ?>
        </div>

        <div class="portfolio-description">
          <h2><?= $artikel ["judul"];?></h2>
          <p>
                <?= $artikel["p1"]; ?>
            </p>
            <p>
                <?= $artikel["p2"]; ?>
            </p>
            <p>
                <?= $artikel["p3"]; ?>
            </p>
            <p>
                <?= $artikel["p4"]; ?>
            </p>
            <p>
                <?= $artikel["p5"]; ?>
            </p>
            <p>
                <?= $artikel["p6"]; ?>
            </p>
            <p>
                <?= $artikel["p7"]; ?>
            </p>
            <p>
                <?= $artikel["p8"]; ?>
            </p>
            <p>
                <?= $artikel["p9"]; ?>
            </p>
            <p>
                <?= $artikel["p10"]; ?>
            </p>
            <p>
                <?= $artikel["p11"]; ?>
            </p>
            <p>
                <?= $artikel["p12"]; ?>
            </p>
            <p>
                <?= $artikel["p13"]; ?>
            </p>
            <p>
                <?= $artikel["p14"]; ?>
            </p>
            <p>
                <?= $artikel["p15"]; ?>
            </p>
            <p>
                <?= $artikel["p16"]; ?>
            </p>
            <p>
                <?= $artikel["p17"]; ?>
            </p>
            <p>
                <?= $artikel["p18"]; ?>
            </p>
            <p>
                <?= $artikel["p19"]; ?>
            </p>
            <p>
                <?= $artikel["p20"]; ?>
            </p>
            <p>
                <?= $artikel["p21"]; ?>
            </p>
            <p>
                <?= $artikel["p22"]; ?>
            </p>
            <p>
                <?= $artikel["p23"]; ?>
            </p>
            <p>
                <?= $artikel["p24"]; ?>
            </p>
            <p>
                <?= $artikel["p25"]; ?>
            </p>
            <p>
                <?= $artikel["p26"]; ?>
            </p>
            <p>
                <?= $artikel["p27"]; ?>
            </p>
            <p>
                <?= $artikel["p28"]; ?>
            </p>
            <p>
                <?= $artikel["p29"]; ?>
            </p>
            <p>
                <?= $artikel["p30"]; ?>
            </p>
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