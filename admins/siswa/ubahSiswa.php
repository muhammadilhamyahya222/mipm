<?php 
session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: ../loginAdmin.php");
    exit;
}

require 'functionSiswa.php';

// ambil data dari url
$id = $_GET["id"];

// query data anime
$data_siswa = query("SELECT * FROM data_siswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan 
if ( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di ubah atau tidak
    if( ubahDataSiswa($_POST) > 0) {
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
<html>

<head>
    <title>Ubah Data Siswa</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../../assets/css/tambahGambar.css">
</head>

<body>
    <section id="input-form">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data_siswa["id"];?>">

        <h1>Ubah Data Siswa</h1>
        <br>
            <div class="form">
                <label for="no_urut">Nomer Urut: </label>
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
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" value="<?= $data_siswa ["username"];?>">
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
</body>

</html>