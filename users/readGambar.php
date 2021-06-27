<?php

require 'function.php';


// ambil data dari url
$id = $_GET["id"];

// query data anime
$gambar = query("SELECT * FROM gambar WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Galeri - <?= $gambar["nama_gambar"];?></title>
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
        <h2>Detail Gambar</h2>
        <ol>
          <li><a href="../index.php" class="btn btn-primary">Kembali</a></li>
        </ol>
      </div>
    </div>
  </section>

<!-- Main -->

  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-title">
        <span><?= $gambar["nama_gambar"];?></span>
        <h2><?= $gambar["nama_gambar"];?></h2>
        </div>
        <p style="text-align: center"><?= $gambar["deskripsi"];?></p>
        <br>

        <!-- Gambar 1 -->

        <?php if (!$gambar["gambar1"]){ ?>
        <div style="display: none;"></div>
        <?php } else { ?>
        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $gambar["kategori"];?>">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/<?= $gambar["gambar1"];?>" class="img-fluid" alt="<?= $gambar["nama_gambar"];?>">
              <div class="portfolio-info">
                <h4 style="text-transform: capitalize"><?= $gambar["nama_gambar"];?></h4>
                <p style="text-transform: capitalize"><?= $gambar["kategori"];?></p>
                <div class="portfolio-links">
                  <a href="../assets/img/portfolio/<?= $gambar["gambar1"];?>" data-gall="portfolioGallery" class="venobox" title="<?= $gambar["nama_gambar"];?>"><i class="ri-add-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

<!-- Gambar 2 -->

          <?php if (!$gambar["gambar2"]){ ?>
          <div style="display: none;"></div>
          <?php } else { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $gambar["kategori"];?>">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/<?= $gambar["gambar2"];?>" class="img-fluid" alt="<?= $gambar["nama_gambar"];?>">
              <div class="portfolio-info">
                <h4 style="text-transform: capitalize"><?= $gambar["nama_gambar"];?></h4>
                <p style="text-transform: capitalize"><?= $gambar["kategori"];?></p>
                <div class="portfolio-links">
                  <a href="../assets/img/portfolio/<?= $gambar["gambar2"];?>" data-gall="portfolioGallery" class="venobox" title="<?= $gambar["nama_gambar"];?>"><i class="ri-add-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

<!-- Gambar 3 -->

          <?php if (!$gambar["gambar3"]){ ?>
          <div style="display: none;"></div>
          <?php } else { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $gambar["kategori"];?>">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/<?= $gambar["gambar3"];?>" class="img-fluid" alt="<?= $gambar["nama_gambar"];?>">
              <div class="portfolio-info">
                <h4 style="text-transform: capitalize"><?= $gambar["nama_gambar"];?></h4>
                <p style="text-transform: capitalize"><?= $gambar["kategori"];?></p>
                <div class="portfolio-links">
                  <a href="../assets/img/portfolio/<?= $gambar["gambar3"];?>" data-gall="portfolioGallery" class="venobox" title="<?= $gambar["nama_gambar"];?>"><i class="ri-add-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

<!-- Gambar 4 -->

          <?php if (!$gambar["gambar4"]){ ?>
          <div style="display: none;"></div>
          <?php } else { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $gambar["kategori"];?>">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/<?= $gambar["gambar4"];?>" class="img-fluid" alt="<?= $gambar["nama_gambar"];?>">
              <div class="portfolio-info">
                <h4 style="text-transform: capitalize"><?= $gambar["nama_gambar"];?></h4>
                <p style="text-transform: capitalize"><?= $gambar["kategori"];?></p>
                <div class="portfolio-links">
                  <a href="../assets/img/portfolio/<?= $gambar["gambar4"];?>" data-gall="portfolioGallery" class="venobox" title="<?= $gambar["nama_gambar"];?>"><i class="ri-add-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

<!-- Gambar 5 -->

          <?php if (!$gambar["gambar5"]){ ?>
          <div style="display: none;"></div>
          <?php } else { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $gambar["kategori"];?>">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/<?= $gambar["gambar5"];?>" class="img-fluid" alt="<?= $gambar["nama_gambar"];?>">
              <div class="portfolio-info">
                <h4 style="text-transform: capitalize"><?= $gambar["nama_gambar"];?></h4>
                <p style="text-transform: capitalize"><?= $gambar["kategori"];?></p>
                <div class="portfolio-links">
                  <a href="../assets/img/portfolio/<?= $gambar["gambar5"];?>" data-gall="portfolioGallery" class="venobox" title="<?= $gambar["nama_gambar"];?>"><i class="ri-add-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

<!-- Gambar 6 -->

          <?php if (!$gambar["gambar6"]){ ?>
          <div style="display: none;"></div>
          <?php } else { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $gambar["kategori"];?>">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/<?= $gambar["gambar6"];?>" class="img-fluid" alt="<?= $gambar["nama_gambar"];?>">
              <div class="portfolio-info">
                <h4 style="text-transform: capitalize"><?= $gambar["nama_gambar"];?></h4>
                <p style="text-transform: capitalize"><?= $gambar["kategori"];?></p>
                <div class="portfolio-links">
                  <a href="../assets/img/portfolio/<?= $gambar["gambar6"];?>" data-gall="portfolioGallery" class="venobox" title="<?= $gambar["nama_gambar"];?>"><i class="ri-add-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

<!-- Gambar 7 -->

          <?php if (!$gambar["gambar7"]){ ?>
          <div style="display: none;"></div>
          <?php } else { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $gambar["kategori"];?>">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/<?= $gambar["gambar7"];?>" class="img-fluid" alt="<?= $gambar["nama_gambar"];?>">
              <div class="portfolio-info">
                <h4 style="text-transform: capitalize"><?= $gambar["nama_gambar"];?></h4>
                <p style="text-transform: capitalize"><?= $gambar["kategori"];?></p>
                <div class="portfolio-links">
                  <a href="../assets/img/portfolio/<?= $gambar["gambar7"];?>" data-gall="portfolioGallery" class="venobox" title="<?= $gambar["nama_gambar"];?>"><i class="ri-add-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

<!-- Gambar 8 -->
          
          <?php if (!$gambar["gambar8"]){ ?>
          <div style="display: none;"></div>
          <?php } else { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $gambar["kategori"];?>">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/<?= $gambar["gambar8"];?>" class="img-fluid" alt="<?= $gambar["nama_gambar"];?>">
              <div class="portfolio-info">
                <h4 style="text-transform: capitalize"><?= $gambar["nama_gambar"];?></h4>
                <p style="text-transform: capitalize"><?= $gambar["kategori"];?></p>
                <div class="portfolio-links">
                  <a href="../assets/img/portfolio/<?= $gambar["gambar8"];?>" data-gall="portfolioGallery" class="venobox" title="<?= $gambar["nama_gambar"];?>"><i class="ri-add-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

<!-- Gambar 9 -->

          <?php if (!$gambar["gambar9"]){ ?>
          <div style="display: none;"></div>
          <?php } else { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $gambar["kategori"];?>">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/<?= $gambar["gambar9"];?>" class="img-fluid" alt="<?= $gambar["nama_gambar"];?>">
              <div class="portfolio-info">
                <h4 style="text-transform: capitalize"><?= $gambar["nama_gambar"];?></h4>
                <p style="text-transform: capitalize"><?= $gambar["kategori"];?></p>
                <div class="portfolio-links">
                  <a href="../assets/img/portfolio/<?= $gambar["gambar9"];?>" data-gall="portfolioGallery" class="venobox" title="<?= $gambar["nama_gambar"];?>"><i class="ri-add-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

<!-- Gambar 10 -->

          <?php if (!$gambar["gambar10"]){ ?>
          <div style="display: none;"></div>
          <?php } else { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $gambar["kategori"];?>">
            <div class="portfolio-wrap">
              <img src="../assets/img/portfolio/<?= $gambar["gambar10"];?>" class="img-fluid" alt="<?= $gambar["nama_gambar"];?>">
              <div class="portfolio-info">
                <h4 style="text-transform: capitalize"><?= $gambar["nama_gambar"];?></h4>
                <p style="text-transform: capitalize"><?= $gambar["kategori"];?></p>
                <div class="portfolio-links">
                  <a href="../assets/img/portfolio/<?= $gambar["gambar10"];?>" data-gall="portfolioGallery" class="venobox" title="<?= $gambar["nama_gambar"];?>"><i class="ri-add-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
    </div>
  </section>

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
  </footer>

<!-- End Footer -->

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


