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
	<title>Export Data Ke Excel - Semua Data</title>
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
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=My_File.xls");
	?>
	<table border="1">
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
</body>
</html>