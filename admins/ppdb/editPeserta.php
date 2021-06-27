<?php 

session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: ../loginAdmin.php");
    exit;
}

require 'functionPPDB.php';

// ambil data dari url
$id = $_GET["id"];

// query data ppdb
$ppdb = query("SELECT * FROM ppdb WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan 
if ( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di ubah atau tidak
    if( editDataPPDB($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>";
    }else {
        echo "<script>
                alert('data gagal diubah');
                document.location.href = 'index.php';
            </script>";
            mysqli_error();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lengkapi Profil PPDB</title>
</head>
<body>
    <p>Data Profil</p>
    <li><a href="logout.php" class="btn btn-danger">Logout</a></li>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $ppdb["id"];?>">      
        <input type="hidden" name="bukti_pembayaran" value="<?= $ppdb["bukti_pembayaran"];?>">  
        <input type="hidden" name="email" value="<?= $ppdb["email"];?>">
        <input type="hidden" name="password" value="<?= $ppdb["password"];?>">
        <input type="hidden" name="verifikasi" value="<?= $ppdb["verifikasi"];?>">
        <input type="hidden" name="no_peserta" value="<?= $ppdb["no_peserta"];?>">
        
        <ul>
            <li>
                <label for="nama">Nama Siswa</label>
                <input type="text" name="nama" id="nama" value="<?= $ppdb["nama"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="jk">Jenis Kelamin</label>
                <input type="text" name="jk" id="jk" value="<?= $ppdb["jk"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="tmp_lahir">Tempat Lahir</label>
                <input type="text" name="tmp_lahir" id="tmp_lahir" value="<?= $ppdb["tmp_lahir"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="text" name="tgl_lahir" id="tgl_lahir" value="<?= $ppdb["tgl_lahir"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="asal_sekolah">Asal Sekolah: </label>
                <input type="text" name="asal_sekolah" id="asal_sekolah" value="<?= $ppdb["asal_sekolah"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <h4>Alamat Siswa</h4>
            </li>
            <li>
                <label for="alamat_siswa_jalan">Nama Jalan: </label>
                <input type="text" name="alamat_siswa_jalan" id="alamat_siswa_jalan" value="<?= $ppdb["alamat_siswa_jalan"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="alamat_siswa_desa_kelurahan">Nama Desa / Kelurahan: </label>
                <input type="text" name="alamat_siswa_desa_kelurahan" id="alamat_siswa_desa_kelurahan" value="<?= $ppdb["alamat_siswa_desa_kelurahan"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="alamat_siswa_kecamatan">Nama Kecamatan: </label>
                <input type="text" name="alamat_siswa_kecamatan" id="alamat_siswa_kecamatan" value="<?= $ppdb["alamat_siswa_kecamatan"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="alamat_siswa_kab_kota">Nama Kabupaten / Kota: </label>
                <input type="text" name="alamat_siswa_kab_kota" id="alamat_siswa_kab_kota" value="<?= $ppdb["alamat_siswa_kab_kota"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="alamat_siswa_provinsi">Nama Provinsi: </label>
                <input type="text" name="alamat_siswa_provinsi" id="alamat_siswa_provinsi" value="<?= $ppdb["alamat_siswa_provinsi"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="kode_pos_siswa">Kode Pos: </label>
                <input type="text" name="kode_pos_siswa" id="kode_pos_siswa" value="<?= $ppdb["kode_pos_siswa"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="tahun_lulus">Tahun Lulus: </label>
                <input type="text" name="tahun_lulus" id="tahun_lulus" value="<?= $ppdb["tahun_lulus"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="prestasi">Prestasi: </label>
                <input type="text" name="prestasi" id="prestasi" value="<?= $ppdb["prestasi"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="nama_ayah">Nama Ayah: </label>
                <input type="text" name="nama_ayah" id="nama_ayah" value="<?= $ppdb["nama_ayah"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="nama_ibu">Nama Ibu: </label>
                <input type="text" name="nama_ibu" id="nama_ibu" value="<?= $ppdb["nama_ibu"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="no_telepon">Nomer Telepon: </label>
                <input type="text" name="no_telepon" id="no_telepon" value="<?= $ppdb["no_telepon"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="pendapatan_ortu">Pendapatan Orang Tua: </label>
                <input type="text" name="pendapatan_ortu" id="pendapatan_ortu" value="<?= $ppdb["pendapatan_ortu"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="kondisi_ortu">Kondisi Orang Tua: </label>
                <input type="text" name="kondisi_ortu" id="kondisi_ortu" value="<?= $ppdb["kondisi_ortu"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <h4>Almat Orang Tua</h4>
            </li>
            <li>
                <label for="alamat_ortu_jalan">Nama Jalan: </label>
                <input type="text" name="alamat_ortu_jalan" id="alamat_ortu_jalan" value="<?= $ppdb["alamat_ortu_jalan"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="alamat_ortu_desa_kelurahan">Nama Desa / Kelurahan: </label>
                <input type="text" name="alamat_ortu_desa_kelurahan" id="alamat_ortu_desa_kelurahan" value="<?= $ppdb["alamat_ortu_desa_kelurahan"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="alamat_ortu_kecamatan">Nama Kecamatan: </label>
                <input type="text" name="alamat_ortu_kecamatan" id="alamat_ortu_kecamatan" value="<?= $ppdb["alamat_ortu_kecamatan"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="alamat_ortu_kab_kota">Nama Kabupaten Atau Kota: </label>
                <input type="text" name="alamat_ortu_kab_kota" id="alamat_ortu_kab_kota" value="<?= $ppdb["alamat_ortu_kab_kota"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="alamat_ortu_provinsi">Nama Provinsi: </label>
                <input type="text" name="alamat_ortu_provinsi" id="alamat_ortu_provinsi" value="<?= $ppdb["alamat_ortu_provinsi"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="kode_pos_ortu">Kode Pos: </label>
                <input type="text" name="kode_pos_ortu" id="kode_pos_ortu" value="<?= $ppdb["kode_pos_ortu"];?>" autofocus autocomplete="off">
            </li>
            <!--  -->
            <li>
                <label for="bukti_pembayaran">Bukti Pembayaran: </label>
                <input type="text" name="bukti_pembayaran" id="bukti_pembayaran" value="<?= $ppdb["bukti_pembayaran"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" value="<?= $ppdb["email"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="text" name="password" id="password" value="<?= $ppdb["password"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="verifikasi">Verifikasi: </label>
                <input type="text" name="verifikasi" id="verifikasi" value="<?= $ppdb["verifikasi"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <label for="no_peserta">Nomer Peserta: </label>
                <input type="text" name="no_peserta" id="no_peserta" value="<?= $ppdb["no_peserta"];?>" autofocus autocomplete="off">
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>
</html>