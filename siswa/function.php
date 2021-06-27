<?php
 // koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "mipm");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

    function ubahDataSiswa($data) {
        global $conn;

        $id = $data["id"];
        $no_urut = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["no_urut"]))));
        $no_induk = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["no_induk"]))));
        $nama = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["nama"]))));
        $jk = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["jk"]))));
        $tmp_lahir = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["tmp_lahir"]))));
        $tgl_lahir = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["tgl_lahir"]))));
        $anak_ke = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["anak_ke"]))));
        $jml_sdr = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["jml_sdr"]))));
        $alamat = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat"]))));
        $tlp = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["tlp"]))));
        $nama_ayah = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["nama_ayah"]))));
        $nama_ibu = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["nama_ibu"]))));
        $pekerjaan = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["pekerjaan"]))));
        $pedp = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["pedp"]))));
        $k_ortu = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["k_ortu"]))));
        $asal_sekolah = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["asal_sekolah"]))));
        $kelas = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["kelas"]))));
        $nisn = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["nisn"]))));
        $username = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["username"]))));
        $password = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["password"]))));
        
        // membuat variabel untuk menampung query dan data-nya sekalian
        $query = "UPDATE data_siswa SET
                    no_urut = '$no_urut',
                    no_induk = '$no_induk',
                    nama = '$nama',
                    jk = '$jk',
                    tmp_lahir = '$tmp_lahir',
                    tgl_lahir = '$tgl_lahir',
                    anak_ke = '$anak_ke',
                    jml_sdr = '$jml_sdr',
                    alamat = '$alamat',
                    tlp = '$tlp',
                    nama_ayah = '$nama_ayah',
                    nama_ibu = '$nama_ibu',
                    pekerjaan = '$pekerjaan',
                    pedp = '$pedp',
                    k_ortu = '$k_ortu',
                    asal_sekolah = '$asal_sekolah',
                    kelas = '$kelas',
                    nisn = '$nisn',
                    username = '$username',
                    password = '$password'
                WHERE id = $id";
        mysqli_query($conn, $query);
        // jalankan query-nya
        return mysqli_affected_rows($conn);
    }

?>