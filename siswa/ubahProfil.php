<?php 
session_start();

if( !isset($_SESSION["login_siswa"]) ){
    header("Location: login.php");
    exit;
}

require 'function.php';

// ambil data dari url
$id = $_SESSION["id"];

// query data data_siswa
$data_siswa = query("SELECT * FROM data_siswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan 
if ( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di ubah atau tidak
    if( ubahDataSiswa($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'profil.php';
            </script>";
    }else {
    echo "<script>
            alert('data gagal diubah');
            document.location.href = 'profil.php';
        </script>";
        mysqli_error();
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MIPM - Ubah Profil Siswa</title>
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
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/tambahGambar.css">
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
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </section>


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Ubah Profil Siswa</h2>
          <ol>
            <li><a href="profil.php" class="btn btn-primary">Kembali</a></li>
            <li><a href="logout.php" class="btn btn-danger">Logout</a></li>            
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <section id="input-form">
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data_siswa["id"];?>">
        <input type="hidden" name="username" value="<?= $data_siswa["username"];?>">

        <h1>Ubah Data Siswa</h1>
        <br>
            <div class="form">
                <label for="no_urut">Nomer Absen: </label>
                <input type="text" name="no_urut" id="no_urut" value="<?= $data_siswa ["no_urut"];?>">
            </div>
            <div class="form">
                <label for="no_induk">Nomer Induk: </label>
                <input type="text" name="no_induk" id="no_induk" value="<?= $data_siswa ["no_induk"];?>">
            </div>
            <div class="form">
                <label for="nama">Nama Siswa: </label>
                <input type="text" name="nama" id="nama" value="<?= $data_siswa ["nama"];?>">
            </div>
            <div class="form">
                <label for="jk">Jenis Kelamin: </label>
                <input type="text" name="jk" id="jk" value="<?= $data_siswa ["jk"];?>">
            </div>            
            <div class="form">
                <label for="tmp_lahir">Tempat Lahir: </label>
                <input type="text" name="tmp_lahir" id="tmp_lahir" value="<?= $data_siswa ["tmp_lahir"];?>">
            </div>
            <div class="form">
                <label for="tgl_lahir">Tanggal Lahir: </label>
                <input type="text" name="tgl_lahir" id="tgl_lahir" value="<?= $data_siswa ["tgl_lahir"];?>">
            </div>
            <div class="form">
                <label for="anak_ke">Anak Ke: </label>
                <input type="text" name="anak_ke" id="anak_ke" value="<?= $data_siswa ["anak_ke"];?>">
            </div>
            <div class="form">
                <label for="jml_sdr">Jumlah Saudara: </label>
                <input type="text" name="jml_sdr" id="jml_sdr" value="<?= $data_siswa ["jml_sdr"];?>">
            </div>
            <div class="form">
                <label for="alamat">Alamat: </label>
                <textarea class="isian" type="text" name="alamat" id="alamat"><?= $data_siswa ["alamat"];?></textarea>
            </div>
            <div class="form">
                <label for="tlp">Telepon: </label>
                <input type="text" name="tlp" id="tlp" value="<?= $data_siswa ["tlp"];?>">
            </div>
            <div class="form">
                <label for="nama_ayah">Nama Ayah: </label>
                <input type="text" name="nama_ayah" id="nama_ayah" value="<?= $data_siswa ["nama_ayah"];?>">
            </div>
            <div class="form">
                <label for="nama_ibu">Nama Ibu: </label>
                <input type="text" name="nama_ibu" id="nama_ibu" value="<?= $data_siswa ["nama_ibu"];?>">
            </div>
            <div class="form">
                <label for="pekerjaan">Pekerjaan: </label>
                <input type="text" name="pekerjaan" id="pekerjaan" value="<?= $data_siswa ["pekerjaan"];?>">
            </div>
            <div class="form">
                <label for="pedp">Pedp: </label>
                <input type="text" name="pedp" id="pedp" value="<?= $data_siswa ["pedp"];?>">
            </div>
            <div class="form">
                <label for="k_ortu">K.Ortu: </label>
                <input type="text" name="k_ortu" id="k_ortu" value="<?= $data_siswa ["k_ortu"];?>">
            </div>
            <div class="form">
                <label for="asal_sekolah">Asal Sekolah: </label>
                <input type="text" name="asal_sekolah" id="asal_sekolah" value="<?= $data_siswa ["asal_sekolah"];?>">
            </div>
            <div class="form">
                <label for="kelas">Kelas: </label>
                <input type="text" name="kelas" id="kelas" value="<?= $data_siswa ["kelas"];?>">
            </div>
            <div class="form">
                <label for="nisn">NISN: </label>
                <input type="text" name="nisn" id="nisn" value="<?= $data_siswa ["nisn"];?>">
            </div>
            <div class="form">
                <label for="nisn">Username: </label>
                <br>
                <b><p style="color: red; font-size: 16px;">Untuk Username Tidak Bisa Dirubah</p></b>
            </div>
            <div class="form">
                <label for="password">Password: </label>
                <input type="text" name="password" id="password" value="<?= $data_siswa ["password"];?>">
            </div>
            <div class="form">
                <button class="bg-blue" type="submit" name="submit">Submit</button>
            </div>
    </form>
    </section>
    <br>
    <br>
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