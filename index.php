<?php

require 'users/function.php';
$gambar = query("SELECT * FROM gambar ORDER BY id DESC LIMIT 5");
$artikel = query("SELECT * FROM artikel ORDER BY id DESC LIMIT 3");
$alumni = query("SELECT * FROM alumni ORDER BY id DESC LIMIT 5");

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
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/icon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyBiz - v2.1.0
  * Template URL: https://bootstrapmade.com/mybiz-free-business-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto nav-menu d-none d-lg-block">
        <h1><a href="#header"><img class="logo" src="assets/img/mi/mipm2.png"></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header"></a></li>
          <li><a href="#about">Profil</a></li>
          <li><a href="#testimonials">Testimoni</a></li>
          <li><a href="#services">Visi & Misi</a></li>
          <li><a href="#portfolio">Galeri</a></li>
          <li><a href="#team">Artikel</a></li>
          <li class="drop-down"><a href="">Lain-lain</a>
            <ul>
              <li><a href="https://elearning.mipm.sch.id/">E-Learning</a></li>
              <li><a href="https://blog.mipm.sch.id/buku/">Buku Elektronik</a></li>
              <li><a href="alumni/index.php">Daftar Alumni</a></li>
              <li><a href="siswa/profil.php">Login Siswa</a></li>
            </ul>
          </li>
          <li><a href="#team">PPDB</a></li>
          <li><a href="#footer">Kontak</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/mi/bg.jpeg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <img class="animate__animated animate__fadeInDown" src="assets/img/mi/logo.png" alt="" style="width: 200px; height: 200px;  display: block; margin: auto;">
                <hr>
                <p class="animate__animated animate__fadeInUp">Unggul dalam berfikir, mulia dalam bersikap, kreatif dalam berkarya, berbudaya, dan peduli lingkungan.</p>
              </div>
            </div>
          </div>
        </div>

    </div>
  </section><!--End Hero-->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Profil</h2>
            <h3>Pada tahun 1951 M, berkumpullah beberapa orang terkemuka di desa Cukir dan pemimpin-pemimpin Madrasah Ibtida’iyah sekitar kecamatan Diwek untuk bermusyawarah mendirikan suatu lembaga pendidikan khusus untuk putri dalam tingkat SLP (SLTP) dan SLA (SLTA) yang kemudian dinamakan  “Madrasah Mu’allimat”</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Adapun faktor-faktor yang mendorong didirikannya madrasah tersebut antara lain :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Kesadaran akan pentingnya arti pendidikan kader – kader islam.</li>
              <li><i class="ri-check-double-line"></i> Belum adanya pendidikan putri dalam tingkatan SLP (SLTP) dan SLA (SLTA) yang akan menampung kelanjutan dari pada pelajar-pelajar yang ada di madrasah ibtida’iyah dalam kecamatan Diwek khususnya.</li>
              <li><i class="ri-check-double-line"></i> Menampung pelajar- pelajar putri di Madrasah sekitar yang tak mampu melanjutkan studinya keluar daerah.</li>
              <li><i class="ri-check-double-line"></i> Untuk kepengurusan sekaligus penanggung jawab madrasah, tampuk kepemimpinan dipimpin oleh KH. M. Adlan Aly dan beliaulah “perintis sekaligus mu’sis“ dari Madrasah Mu’allimat ini.</li>
            </ul>
            <p class="font-italic">
              Setelah empat tahun berdirinya madrasah SLP (SLTP) dan SLA (SLTA) maka pada tanggal 16 Juni 1954 dibukalah Madrasah Ibtida’iyah dengan nama Madrasah Ibtida’iyah Mu’allimat NU.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About List Section ======= -->
    <section id="about-list" class="about-list">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0">
              <h4>Sambutan Kepala Sekolah</h4>
              <p>Assalamualaikum Wr. Wb.</p>
              <p>Seraya memanjatkan puji syukur ke hadirat Allah SWT, disertai perasaan bangga saya menuliskan sambutan dalam rangka penerbitan website Madrasah. Di era global dan pesatnya Teknologi Informasi ini, tidak dipungkiri bahwa keberadaan sebuah website untuk suatu organisasi, sangatlah penting. Wahana website dapat digunakan sebagai media penyebarluasan informasi sekaligus sarana promosi sekolah yang cukup efektif. Berbagai kegiatan positif sekolah dapat diunggah, disertai gambar-gambar yang relevan, sehingga masyarakat dapat mengetahui sejumlah prestasi yang telah berhasil diraih oleh MI Perguruan Mu'allimat Cukir. Sebagai media pembelajaran, website madrasah dapat memuat berbagai artikel dan materi pembelajaran. Guru juga dapat memberikan tugas-tugas mandiri kepada peserta didik melalui portal yang telah disiapkan. Fasilitas ini akan menunjang kegiatan pembelajaran berbasis Teknologi Informasi.</p>
              <span id="more-sambutan"> <span id="dots-sambutan"></span>
              <p>Berkaitan dengan koneksi, website menjadi sarana komunikasi antara madrasah dengan alumni. Alumni dapat memanfaatkan website madrasah untuk konsolidasi, sehingga terbentuk ikatan alumni yang makin besar dan solid. Madrasah menyadari bahwa alumni merupakan salah satu potensi yang apabila digali dan dikelola dengan baik akan mampu memberikan kontribusi positif bagi madrasah. Oleh karena itu, saya berharap, melalui website ini, himpunan alumni MI Perguruan Mu'allimat Cukir akan semakin berkembang.</p>
              <p>Demi kemajuan sekolah dan pengembangan mutu, saya tetap berharap tim pengelola website sekolah, agar terus mengembangkan website dengan semangat, tanpa mengenal menyerah. Terima kasih atas kerjasamanya, maju terus untuk mencapai Madrasah yang lebih hebat dan bermartabat.</p>
            </span>
            <p type="text" id="read-sambutan" style="color: #01b1d7;" onclick="readSambutan()">Baca sambutan lengkap...</p>
            <script type="text/javascript">
              var i=0;
              function readSambutan(){
                if(!i){
                  document.getElementById("more-sambutan").style.display = "inline";
                  document.getElementById("dots-sambutan").style.display = "none";
                  document.getElementById("read-sambutan").innerHTML="Lebih sedikit..";
                  i=1;
                }
                else{
                  document.getElementById("more-sambutan").style.display = "none";
                  document.getElementById("dots-sambutan").style.display = "inline";
                  document.getElementById("read-sambutan").innerHTML="Baca sambutan lengkap...";
                  i=0;
                }
              }
            </script>
              <p>Wassalamualaikum Wr. Wb.</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/kepalaSekolah.png");'></div>
        </div>

      </div>
    </section><!-- End About List Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="owl-carousel testimonials-carousel">
      <?php foreach($alumni as $row) : ?>

          <div class="testimonial-item">
            <img src="assets/img/alumni/<?= $row["fotoAlumni"];?>" class="testimonial-img" alt="">
            <h3><?= $row["nama"];?></h3>
            <h4>lulusan tahun <?= $row["tahun_lulus"];?></h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <?= $row["testi"];?>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <span>Visi & Misi</span>
          <h2>Visi & Misi</h2>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <h4>Visi</h4>
              <p>Unggul dalam berfikir, mulia dalam bersikap, kreatif dalam berkarya, berbudaya, dan peduli lingkungan.</p>
              <span id="more-visi"> <span id="dots-visi"></span>
                <p class="card-text">Indikator Visi:</p>
                  <ul>
                    <li class="card-text"><p>Unggul dalam keimanan dan ketaqwaan terhadap Allah SWT.</p></li>
                    <li class="card-text"><p>Unggul dalam pemgembangan kurikulum yang mengacu pada 8 standar pendidikan.</p></li>
                    <li class="card-text"><p>Unggul dalam pembelajaran Aktif, Kreatif, Efektif, Inovatif dan Menyenangkan dengan pendekatan Saintific.</p></li>
                    <li class="card-text"><p>Unggul dalam prestasi bidang akademik   dan non akademik.</p></li>
                    <li class="card-text"><p>Unggul dalam kejujuran, peduli, disiplin, santun, percaya diri dalam berinteraksi dengan lingkungan sosial dan alam.</p></li>
                    <li class="card-text"><p>Unggul dalam karakter warga sekolah (religius, nasionalis, mandiri, gotong royong dan integritas).</p></li>
                    <li class="card-text"><p>Unggul dalam pembelajaran dan pengembagan diri yang terintegrasi dengan Pendidikan Lingkungan Hidup.</p></li>
                    <li class="card-text"><p>Unggul dalam menciptakan lingkungan sekolah yang bersih, asri dan nyaman untuk mencegah pencemaran dan kerusakan lingkungan.</p></li>
                  </ul>
                </span>
                <p class="card-huruf" type="text" id="read-visi" onclick="readVisi()">Selengkapnya...</p>
                <script type="text/javascript">
                  var i=0;
                  function readVisi(){
                    if(!i){
                      document.getElementById("more-visi").style.display = "inline";
                      document.getElementById("dots-visi").style.display = "none";
                      document.getElementById("read-visi").innerHTML="Lebih sedikit..";
                      i=1;
                    }
                    else{
                      document.getElementById("more-visi").style.display = "none";
                      document.getElementById("dots-visi").style.display = "inline";
                      document.getElementById("read-visi").innerHTML="Selengkapnya...";
                      i=0;
                    }
                  }
                </script>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <h4>Misi</h4>
              <p>a. Meningkatkan keimanan dan ketaqwaan terhadap Allah SWT melalui penanaman budi pekerti dan program kegiatan keagamaan.</p>
              <span id="more-misi"> <span id="dots-misi"></span>
                <p class="card-text">b. Mewujudkan pengembangan kurikulum yang meliputi 8 standar.</p>
                <p class="card-text">c. Menyelenggarakan Pembelajaran yang Aktif, Kreatif, Efektif dan Menyenangkan serta inovatif (PAKEMI), dengan pendekatan saintifik.</p>
                <p class="card-text">d. Meningkatkan prestasi akademik dan non akademik melalui kegiatan pengembangan diri sesuai dengan minat dan bakat peserta didik.</p>
                <p class="card-text">e. Meningkatkan sikap kejujuran, peduli, disiplin, santun, percaya diri dalam berinteraksi dengan lingkungan sosial dan alam.</p>
                <p class="card-text">f. Menanamkan Penguatan Pendidikan Karakter (Religius, Nasionalis, Mandiri, Gotong – royong dan Integritas).</p>
                <p class="card-text">g. Mengembangkan budaya luhur dan karakter bangsa serta peduli dan berbudaya lingkungan.</p>
                <p class="card-text">h. Menciptakan lingkungan fisik dan psikologis yang kondusif (sehat, bersih, rapi, indah, nyaman) bagi pertumbuhan dan perkembangan anak didik.</p>
                <p class="card-text">i. Mewujudkan lingkungan sekolah yang bersih, asri dan nyaman untuk mencegah pencemaran dan kerusakan lingkungan.</p>
                <p class="card-text">j. Melaksanakan 7 K (Keamanan, Kebersihan, Ketertiban, Keindahan, Kekeluargaan, Kerindangan dan Kesehatan) dalam mewujudkan madrasah Adiwiyata.</p>
                <p class="card-text">k. Meningkatkan tata kelola lingkungan madrasah yang asri melalui pemeliharaan yang berkesinambungan sehingga terwujudnya Madrasah Adiwiyata.</p>
              </p>
              </span>
              <p class="card-huruf" type="text" id="read-misi" onclick="readMisi()">Selengkapnya...</p>
              <script type="text/javascript">
                var i=0;
                function readMisi(){
                  if(!i){
                    document.getElementById("more-misi").style.display = "inline";
                    document.getElementById("dots-misi").style.display = "none";
                    document.getElementById("read-misi").innerHTML="Lebih sedikit..";
                    i=1;
                  }
                  else{
                    document.getElementById("more-misi").style.display = "none";
                    document.getElementById("dots-misi").style.display = "inline";
                    document.getElementById("read-misi").innerHTML="Selengkapnya...";
                    i=0;
                  }
                }
              </script>
            </div>
          </div>
  
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Galeri</span>
          <h2>Galeri</h2>
        </div>

        <div class="row portfolio-container">
          <?php foreach($gambar as $row) : ?>
          <a href="users/readGambar.php?id=<?= $row["id"];?>">
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $row["kategori"];?>">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/<?= $row["gambar1"];?>" class="img-fluid" alt="<?= $row["nama_gambar"];?>">              
              <div class="portfolio-info">
                <h4 style="text-transform: capitalize"><?= $row["nama_gambar"];?></h4>
                <p style="text-transform: capitalize"><?= $row["kategori"];?></p>
              </div>              
            </div>
          </div>
          </a>
          <?php endforeach; ?>
          <a href="users/readAllGambar.php">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap"  style="height: 233px">   
                <h4 style="margin-top: 100px">
                  <p style="text-align: center">Tampilkan Semua Gambar</p>              
                </h4>
            </div>
          </div>
          </a>
        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <span>Artikel</span>
          <h2>Artikel</h2>
        </div>

        <div class="row">
          <?php foreach($artikel as $row) : ?>
          <div class="col-lg-6">
          <br>
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/artikel/<?= $row["logo"];?>" class="img-fluid" alt="<?= $row["judul"];?>"></div>
              <div class="member-info">
                <h4><a href="users/readArtikel.php?id=<?= $row["id"];?>" title="Lebih lanjut"><?= $row["judul"];?></h4></a>
                <p><?= $row["p1"];?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          <div class="col-lg-6">
            <br>
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4><a href="users/readAllArtikel.php" title="Lebih lanjut">Baca Semua Artikel</h4></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

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
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>