<?php
session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: ../loginAdmin.php");
    exit;
}
require '../siswa/functionSiswa.php';
$data = mysqli_query($conn, "SELECT * FROM data_siswa");

?>


<!DOCTYPE html>
<html>
<head>
 <?php
//  include 'koneksi.php';
 ?>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MIPM - Import Excel</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../assets/img/icon.png" rel="icon">
    <link href="../../assets/img/icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>
<body>

 <table>
                
  <form method="post" enctype="multipart/form-data" >
   <tr>
    <td>Pilih File</td>
    <td><input name="filemhsw" type="file" required="required"></td>
   </tr>
   <tr>
    <td></td>
    <td><input name="upload" type="submit" value="Import"></td>
   </tr>
  </form>
 </table>
 <?php

 if (isset($_POST['upload'])) {
    global $conn;

  require('spreadsheet-reader-master/php-excel-reader/excel_reader2.php');
  require('spreadsheet-reader-master/SpreadsheetReader.php');

  //upload data excel kedalam folder uploads
  $target_dir = "/uploads".basename($_FILES['filemhsw']['name']);
  
  move_uploaded_file($_FILES['filemhsw']['tmp_name'],$target_dir);

  $Reader = new SpreadsheetReader($target_dir);

  foreach ($Reader as $Key => $Row)
  {
   // import data excel mulai baris ke-2 (karena ada header pada baris 1)
   if ($Key < 2) continue;   
   $query=mysqli_query($conn, "INSERT INTO data_siswa VALUES ('', '".$Row[0]."', '".$Row[1]."', '".$Row[2]."', '".$Row[3]."', '".$Row[4]."', '".$Row[5]."', '".$Row[6]."', '".$Row[7]."', '".$Row[8]."', '".$Row[9]."', '".$Row[10]."', '".$Row[11]."', '".$Row[12]."', '".$Row[13]."', '".$Row[14]."', '".$Row[15]."', '".$Row[16]."', '".$Row[17]."', '".$Row[18]."', '".$Row[19]."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
  }
  if ($query) {
    echo "Import data berhasil";
   }else{
    echo mysqli_error($conn);
   }
 }
 ?>
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
          <h2>Import Excel</h2>
          <ol>
            <li><a href="../siswa/index.php" class="btn btn-primary">Kembali</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
 <table border="1" style="margin: 5px">
  <tr>
      <th>No</th>
      <th>No Absen</th>
			<th>No Induk</th>			
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Anak Ke</th>
			<th>Jumlah Saudara</th>
			<th>Alamat</th>
			<th>No.Telp</th>
			<th>Nama Ayah</th>
			<th>Nama Ibu</th>
			<th>Pekerjaan</th>
			<th>Pedp</th>
			<th>K.Ortu</th>
			<th>Asal Sekolah</th>
			<th>Kelas</th>
			<th>NISN</th>
			<th>Username</th>
			<th>Password</th>
  </tr>
  <?php
  global $conn;   
  $no=1;
  
  while($d = mysqli_fetch_array($data)){
   ?>
    <tr>
      <td><?=$no++; ?></td>
      <td><?php echo $d['no_urut']; ?></td>
			<td><?php echo $d['no_induk']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['jk']; ?></td>
			<td><?php echo $d['tmp_lahir']; ?></td>
			<td><?php echo $d['tgl_lahir']; ?></td>
			<td><?php echo $d['anak_ke']; ?></td>
			<td><?php echo $d['jml_sdr']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td><?php echo $d['tlp']; ?></td>
			<td><?php echo $d['nama_ayah']; ?></td>
			<td><?php echo $d['nama_ibu']; ?></td>
			<td><?php echo $d['pekerjaan']; ?></td>
			<td><?php echo $d['pedp']; ?></td>
			<td><?php echo $d['k_ortu']; ?></td>
			<td><?php echo $d['asal_sekolah']; ?></td>
			<td><?php echo $d['kelas']; ?></td>
			<td><?php echo $d['nisn']; ?></td>
			<td><?php echo $d['username']; ?></td>
			<td><?php echo $d['password']; ?></td>
    </tr>
   <?php 
  }
  ?>
 </table>
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
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="../../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>
</body>
</html>