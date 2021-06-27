<?php 
session_start();

if( !isset($_SESSION["login_ppdb"]) ){
    header("Location: login.php");
    exit;
}

require 'function.php';

// ambil data dari url
$id = $_SESSION["id"];

// query data ppdb
$ppdb = query("SELECT * FROM ppdb WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan 
if ( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di ubah atau tidak
    if( lengkapiBuktiPembayaran($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'profilPeserta.php';
            </script>";
    }else {
    echo "<script>
            alert('data gagal diubah');
            document.location.href = 'profilPeserta.php';
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
    <title>Upload Bukti Transfer</title>
</head>
<body>
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
        <input type="hidden" name="email" value="<?= $ppdb["email"];?>">
        <input type="hidden" name="password" value="<?= $ppdb["password"];?>">
        <input type="hidden" name="verifikasi" value="<?= $ppdb["verifikasi"];?>">
        <input type="hidden" name="no_peserta" value="<?= $ppdb["no_peserta"];?>">
        
        <ul>
            <li>
                <label for="bukti_pembayaran">Upload Bukti Pembayaran: </label>
                <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" value="<?= $ppdb["bukti_pembayaran"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>
</html>