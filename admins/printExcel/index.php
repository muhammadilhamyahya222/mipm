<?php
session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: ../loginAdmin.php");
    exit;
}
require '../siswa/functionSiswa.php';

	// menampilkan data pegawai
	$data = mysqli_query($conn, "SELECT * FROM data_siswa");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>MIPM - Export Data ke Excel - Semua</title>
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
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{

	}
	</style>

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
          <h2>Semua Data Siswa Excel</h2>
          <ol>
            <li><a href="../siswa/index.php" class="btn btn-primary">Kembali</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
	
	<center>
		<h1>Export Data Ke Excel</h1>
	</center>

	<center>
		<a target="_blank" href="export_excel.php" style="background: blue; color: #fff; padding: 8px 10px; text-decoration: none; border-radius: 2px;">EXPORT KE EXCEL</a>
	</center>

	<table>
		<tr>
			<th>No Urut</th>
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
			while($d = mysqli_fetch_array($data)){
		?>
		<tr>
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