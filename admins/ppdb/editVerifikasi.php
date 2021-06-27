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
    if( verifikasiDataPPDB($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'verifikasi.php';
            </script>";
    }else {
        echo "<script>
                alert('data gagal diubah');
                document.location.href = 'verifikasi.php';
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
    <title>Edit Verifikasi</title>
</head>
<body>
    <h1>Proses Verivikasi</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $ppdb["id"];?>">
        <input type="hidden" name="nama" value="<?= $ppdb["nama"];?>">
        <input type="hidden" name="jk" value="<?= $ppdb["jk"];?>">
        <input type="hidden" name="tmp_lahir" value="<?= $ppdb["tmp_lahir"];?>">
        <input type="hidden" name="tgl_lahir" value="<?= $ppdb["tgl_lahir"];?>">
        <input type="hidden" name="asal_sekolah" value="<?= $ppdb["asal_sekolah"];?>">
        <!-- Alamat Siswa -->
        <input type="hidden" name="alamat_siswa_jalan" value="<?= $ppdb["alamat_siswa_jalan"];?>">
        <input type="hidden" name="alamat_siswa_desa_kelurahan" value="<?= $ppdb["alamat_siswa_desa_kelurahan"];?>">
        <input type="hidden" name="alamat_siswa_kecamatan" value="<?= $ppdb["alamat_siswa_kecamatan"];?>">
        <input type="hidden" name="alamat_siswa_kab_kota" value="<?= $ppdb["alamat_siswa_kab_kota"];?>">
        <input type="hidden" name="alamat_siswa_provinsi" value="<?= $ppdb["alamat_siswa_provinsi"];?>">
        <input type="hidden" name="kode_pos_siswa" value="<?= $ppdb["kode_pos_siswa"];?>">
        <!-- Akhir Alamat Siswa -->
        <input type="hidden" name="tahun_lulus" value="<?= $ppdb["tahun_lulus"];?>">
        <input type="hidden" name="prestasi" value="<?= $ppdb["prestasi"];?>">
        <input type="hidden" name="nama_ayah" value="<?= $ppdb["nama_ayah"];?>">
        <input type="hidden" name="nama_ibu" value="<?= $ppdb["nama_ibu"];?>">
        <input type="hidden" name="no_telepon" value="<?= $ppdb["no_telepon"];?>">
        <input type="hidden" name="pendapatan_ortu" value="<?= $ppdb["pendapatan_ortu"];?>">
        <input type="hidden" name="kondisi_ortu" value="<?= $ppdb["kondisi_ortu"];?>">
        <!-- Alamat Ortu -->
        <input type="hidden" name="alamat_ortu_jalan" value="<?= $ppdb["alamat_ortu_jalan"];?>">
        <input type="hidden" name="alamat_ortu_desa_kelurahan" value="<?= $ppdb["alamat_ortu_desa_kelurahan"];?>">
        <input type="hidden" name="alamat_ortu_kecamatan" value="<?= $ppdb["alamat_ortu_kecamatan"];?>">
        <input type="hidden" name="alamat_ortu_kab_kota" value="<?= $ppdb["alamat_ortu_kab_kota"];?>">
        <input type="hidden" name="alamat_ortu_provinsi" value="<?= $ppdb["alamat_ortu_provinsi"];?>">
        <input type="hidden" name="kode_pos_ortu" value="<?= $ppdb["kode_pos_ortu"];?>">
        <!-- Akhir Alamat Ortu -->
        <input type="hidden" name="bukti_pembayaran" value="<?= $ppdb["bukti_pembayaran"];?>">
        <input type="hidden" name="email" value="<?= $ppdb["email"];?>">
        <input type="hidden" name="password" value="<?= $ppdb["password"];?>">
        
        <ul>
            <li>
                <img src="../../assets/img/bukti_pembayaran/<?= $ppdb["bukti_pembayaran"];?>" alt="Bukti Pembayran" class="img-fluid">
                <div class="portfolio-links">
                  <a href="../../assets/img/bukti_pembayaran/<?= $ppdb["bukti_pembayaran"];?>" data-gall="portfolioGallery" class="venobox" title=""><i class="ri-add-fill"></i></a>
                </div>
            </li>
            <li>
                <label for="verifikasi">Verivikasi: </label>
                <input type="text" name="verifikasi" id="verifikasi" value="<?= $ppdb["verifikasi"];?>">
            </li>
            <li>
                <label for="no_peserta">Nomer Peserta: </label>
                <input type="text" name="no_peserta" id="no_peserta" value="<?= $ppdb["no_peserta"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>
</html>