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

    function uploadBuktiPembayaran() {
        $namaFile = $_FILES['bukti_pembayaran']['name'];
        $ukuranFile = $_FILES['bukti_pembayaran']['size'];
        $error = $_FILES['bukti_pembayaran']['error'];
        $tmpName = $_FILES['bukti_pembayaran']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                        alert('pilih gambar terlebih dahulu');
                </script>";
            return false;
        }
        
        // cek apakah yang diupload gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile); 
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            echo "<script>
                    alert('yang anda isikan bukan gambar!');
                </script>";
            return false;
        }

        // cek apakah ukuran file terlalu besar
        if( $ukuranFile > 5242880 ) {
            echo "<script>
                    alert('ukuran gambar telalu besar! Max 5Mb');
                </script>";
            return false;
        }
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tmpName, '../../assets/img/bukti_pembayaran/' . $namaFileBaru);

        return $namaFileBaru;
    }

    // Edit Data PPDB
    function editDataPPDB($data) {
        global $conn;

        $id = $data["id"];
        $nama = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["nama"]))));
        $jk = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["jk"]))));
        $tmp_lahir = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["tmp_lahir"]))));
        $tgl_lahir = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["tgl_lahir"]))));
        $asal_sekolah = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["asal_sekolah"]))));
        $alamat_siswa = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_siswa"]))));
        $tahun_lulus = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["tahun_lulus"]))));
        $prestasi = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["prestasi"]))));
        $nama_ayah = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["nama_ayah"]))));
        $nama_ibu = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["nama_ibu"]))));
        $no_telepon = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["no_telepon"]))));
        $pendapatan_ortu = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["pendapatan_ortu"]))));
        $kondisi_ortu = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["kondisi_ortu"]))));
        $alamat_jalan = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_jalan"]))));
        $alamat_desa_kelurahan = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_desa_kelurahan"]))));
        $alamat_kecamatan = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_kecamatan"]))));
        $alamat_kab_kota = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_kab_kota"]))));
        $alamat_provinsi = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_provinsi"]))));
        $kode_pos = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["kode_pos"]))));
        $email = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["email"]))));
        $password = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["password"]))));
        $verifikasi = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["verifikasi"]))));
        $no_peserta = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["no_peserta"]))));


        $bukti_pembayaran = uploadBuktiPembayaran();
        


        if( !$bukti_pembayaran) {
            return false;
        }

        // membuat variabel untuk menampung query dan data-nya sekalian
        $query = "UPDATE ppdb SET
                    nama = '$nama',
                    jk = '$jk',
                    tmp_lahir = '$tmp_lahir',
                    tgl_lahir = '$tgl_lahir',
                    asal_sekolah = '$asal_sekolah',
                    alamat_siswa = '$alamat_siswa',
                    tahun_lulus = '$tahun_lulus',
                    prestasi = '$prestasi',
                    nama_ayah = '$nama_ayah',
                    nama_ibu = '$nama_ibu',
                    no_telepon = '$no_telepon',
                    pendapatan_ortu = '$pendapatan_ortu',
                    kondisi_ortu = '$kondisi_ortu',
                    alamat_jalan = '$alamat_jalan',
                    alamat_desa_kelurahan = '$alamat_desa_kelurahan',
                    alamat_kecamatan = '$alamat_kecamatan',
                    alamat_kab_kota = '$alamat_kab_kota',
                    alamat_provinsi = '$alamat_provinsi',
                    kode_pos = '$kode_pos',
                    bukti_pembayaran = '$bukti_pembayaran',
                    email = '$email',                    
                    password = '$password',
                    verifikasi = '$verifikasi',
                    no_peserta = '$no_peserta'
                WHERE id = $id";
        mysqli_query($conn, $query);
        // jalankan query-nya
        return mysqli_affected_rows($conn);
    }

    // Hapus Data PPDB
    function hapusDataPPDB ($data) {
        global $conn;
    
        mysqli_query($conn, "DELETE FROM ppdb WHERE id = $id");
        return mysqli_affected_rows($conn);
        
    }

    // Verivikasi

    function verifikasiDataPPDB($data) {
        global $conn;

        $id = $data["id"];
        $nama = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["nama"]))));
        $jk = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["jk"]))));
        $tmp_lahir = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["tmp_lahir"]))));
        $tgl_lahir = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["tgl_lahir"]))));
        $asal_sekolah = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["asal_sekolah"]))));
        $alamat_siswa_jalan = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_siswa_jalan"]))));
        $alamat_siswa_desa_kelurahan = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_siswa_desa_kelurahan"]))));
        $alamat_siswa_kecamatan = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_siswa_kecamatan"]))));
        $alamat_siswa_kab_kota = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_siswa_kab_kota"]))));
        $alamat_siswa_provinsi = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_siswa_provinsi"]))));
        $kode_pos_siswa = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["kode_pos_siswa"]))));
        $tahun_lulus = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["tahun_lulus"]))));
        $prestasi = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["prestasi"]))));
        $nama_ayah = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["nama_ayah"]))));
        $nama_ibu = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["nama_ibu"]))));
        $no_telepon = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["no_telepon"]))));
        $pendapatan_ortu = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["pendapatan_ortu"]))));
        $kondisi_ortu = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["kondisi_ortu"]))));
        $alamat_ortu_jalan = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_ortu_jalan"]))));
        $alamat_ortu_desa_kelurahan = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_ortu_desa_kelurahan"]))));
        $alamat_ortu_kecamatan = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_ortu_kecamatan"]))));
        $alamat_ortu_kab_kota = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_ortu_kab_kota"]))));
        $alamat_ortu_provinsi = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat_ortu_provinsi"]))));
        $kode_pos_ortu = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["kode_pos_ortu"]))));
        $bukti_pembayaran = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["bukti_pembayaran"]))));
        $email = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["email"]))));
        $password = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["password"]))));
        $verifikasi = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["verifikasi"]))));
        $no_peserta = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["no_peserta"]))));
        

        // membuat variabel untuk menampung query dan data-nya sekalian
        $query = "UPDATE ppdb SET
                    nama = '$nama',
                    jk = '$jk',
                    tmp_lahir = '$tmp_lahir',
                    tgl_lahir = '$tgl_lahir',
                    asal_sekolah = '$asal_sekolah',
                    alamat_siswa_jalan = '$alamat_siswa_jalan',
                    alamat_siswa_desa_kelurahan = '$alamat_siswa_desa_kelurahan',
                    alamat_siswa_kecamatan = '$alamat_siswa_kecamatan',
                    alamat_siswa_kab_kota = '$alamat_siswa_kab_kota',
                    alamat_siswa_provinsi = '$alamat_siswa_provinsi',
                    kode_pos_siswa = '$kode_pos_siswa',
                    tahun_lulus = '$tahun_lulus',
                    prestasi = '$prestasi',
                    nama_ayah = '$nama_ayah',
                    nama_ibu = '$nama_ibu',
                    no_telepon = '$no_telepon',
                    pendapatan_ortu = '$pendapatan_ortu',
                    kondisi_ortu = '$kondisi_ortu',
                    alamat_ortu_jalan = '$alamat_ortu_jalan',
                    alamat_ortu_desa_kelurahan = '$alamat_ortu_desa_kelurahan',
                    alamat_ortu_kecamatan = '$alamat_ortu_kecamatan',
                    alamat_ortu_kab_kota = '$alamat_ortu_kab_kota',
                    alamat_ortu_provinsi = '$alamat_ortu_provinsi',
                    kode_pos_ortu = '$kode_pos_ortu',
                    bukti_pembayaran = '$bukti_pembayaran',
                    email = '$email',                    
                    password = '$password',
                    verifikasi = '$verifikasi',
                    no_peserta = '$no_peserta'
                WHERE id = $id";
        mysqli_query($conn, $query);
        // jalankan query-nya
        return mysqli_affected_rows($conn);
    }




?>