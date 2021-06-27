<?php 

session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: ../loginAdmin.php");
    exit;
}

require 'functionSiswa.php';

// cek apakah tombol submit sudah ditekan 
if ( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di tambahkan atau tidak
    if( tambahDataSiswa($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>";
    }else {
    echo "<script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>";
    }
}

?>



<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../../assets/css/tambahArtikel.css">
</head>

<body>


    <section id="input-form">
    <h1>Tambah Data Siswa</h1>
    <br>
        <form action="" method="post" enctype="multipart/form-data">
                <div class="form">
                    <label for="no_urut">Nomer Urut: </label>
                    <input type="text" name="no_urut" id="no_urut" required>
                </div>
                <div class="form">
                    <label for="no_induk">Nomer Induk: </label>
                    <input type="text" name="no_induk" id="no_induk">
                </div>
                <div class="form">
                    <label for="nama">Nama Siswa: </label>
                    <input type="text" name="nama" id="nama">
                </div>
                <div class="form">
                    <label for="jk">Jenis Kelamin: </label>
                    <input type="text" name="jk" id="jk">
                </div>
                <div class="form">
                    <label for="tmp_lahir">Tempat Lahir: </label>
                    <input type="text" name="tmp_lahir" id="tmp_lahir">
                </div>
                <div class="form">
                    <label for="tgl_lahir">Tanggal Lahir: </label>
                    <input type="text" name="tgl_lahir" id="tgl_lahir">
                </div>
                <div class="form">
                    <label for="anak_ke">Anak Ke-: </label>
                    <input type="text" name="anak_ke" id="anak_ke">
                </div>
                <div class="form">
                    <label for="jml_sdr">Jumlah Saudara: </label>
                    <input type="text" name="jml_sdr" id="jml_sdr">
                </div>
                <div class="form">
                    <label for="alamat">Alamat: </label>
                    <textarea class="isian" type="text" name="alamat" id="alamat" width="90%" height="100px"></textarea>
                </div>
                <div class="form">
                    <label for="tlp">Nomer Telepon: </label>
                    <input type="text" name="tlp" id="tlp">
                </div>
                <div class="form">
                    <label for="nama_ayah">Nama Ayah: </label>
                    <input type="text" name="nama_ayah" id="nama_ayah">
                </div>
                <div class="form">
                    <label for="nama_ibu">Nama Ibu: </label>
                    <input type="text" name="nama_ibu" id="nama_ibu">
                </div>
                <div class="form">
                    <label for="pekerjaan">Pekerjaan: </label>
                    <input type="text" name="pekerjaan" id="pekerjaan">
                </div>
                <div class="form">
                    <label for="pedp">Pedp: </label>
                    <input type="text" name="pedp" id="pedp">
                </div>
                <div class="form">
                    <label for="k_ortu">K.Ortu: </label>
                    <input type="text" name="k_ortu" id="k_ortu">
                </div>
                <div class="form">
                    <label for="asal_sekolah">Asal Sekolah: </label>
                    <input type="text" name="asal_sekolah" id="asal_sekolah">
                </div>
                <div class="form">
                    <label for="kelas">Kelas: </label>
                    <input type="text" name="kelas" id="kelas">
                </div>
                <div class="form">
                    <label for="nisn">NISN: </label>
                    <input type="text" name="nisn" id="nisn">
                </div>
                <div class="form">
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="form">
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password">
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