<?php

// Koneksi ke database
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

        // Tambah Data Siswa

        function tambahDataAlumni($data) {
            global $conn;
    
            $nama = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["nama"]))));
            $jk = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["jk"]))));
            $tgl_lahir = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["tgl_lahir"]))));
            $tahun_lulus = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["tahun_lulus"]))));
            $nis = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["nis"]))));
            $alamat = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat"]))));
            $email = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["email"]))));
            $telepon = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["telepon"]))));
            $handphone = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat"]))));
            
            // Upload gambar
            $fotoAlumni = uploadFotoAlumni();

            if( !$fotoAlumni) {
                return false;
            }
    
            // Membuat query tambah
            $query = "INSERT INTO alumni
                    VALUES
                    ('', '$nama', '$jk', '$tgl_lahir', '$tahun_lulus', '$nis', '$alamat', '$email', '$telepon', '$handphone', '$fotoAlumni', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP) ";
            mysqli_query($conn, $query);
    
            return mysqli_affected_rows($conn);
        }

        function uploadFotoAlumni() {
            $namaFile = $_FILES['fotoAlumni']['name'];
            $ukuranFile = $_FILES['fotoAlumni']['size'];
            $error = $_FILES['fotoAlumni']['error'];
            $tmpName = $_FILES['fotoAlumni']['tmp_name'];
    
            // cek apakah tidak ada gambar yang diupload
            if( $error === 4) {
                echo "<script>
                            alert('pilih foto terlebih dahulu');
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
                        alert('ukuran foto telalu besar!');
                    </script>";
                return false;
            }
            
            // lolos pengecekan, gambar siap diupload
            // generate nama gambar baru
            $namaFileBaru = uniqid();
            $namaFileBaru .= '.';
            $namaFileBaru .= $ekstensiGambar;
            
            move_uploaded_file($tmpName, '../../assets/img/alumni/' .$namaFileBaru);
    
            return $namaFileBaru;
        }

        function ubahDataAlumni($data) {
            global $conn;
    
            $id = $data["id"];
            $nama = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["nama"]))));
            $jk = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["jk"]))));
            $tgl_lahir = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["tgl_lahir"]))));
            $tahun_lulus = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["tahun_lulus"]))));
            $nis = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["nis"]))));
            $alamat = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["alamat"]))));
            $email = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["email"]))));
            $telepon = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["telepon"]))));
            $handphone = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["handphone"]))));
            $fotoLama = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data["fotoLama"]))));

            // cek apakah user pilih gambar baru atau tidak

            // Gambar Artikel 1
            if( $_FILES['fotoAlumni']['error'] === 4 ) {
                $fotoAlumni = $fotoLama;
            }else{
                $fotoAlumni = uploadFotoAlumni();
            }
    
            // membuat variabel untuk menampung query dan data-nya sekalian
            $query = "UPDATE alumni SET
                        nama = '$nama',
                        jk = '$jk',
                        tgl_lahir = '$tgl_lahir',
                        tahun_lulus = '$tahun_lulus',
                        nis = '$nis',
                        alamat = '$alamat',
                        email = '$email',
                        telepon = '$telepon',
                        handphone = '$handphone',
                        fotoAlumni = '$fotoAlumni'
                    WHERE id = $id";
            mysqli_query($conn, $query);
            // jalankan query-nya
            return mysqli_affected_rows($conn);
        }
    
        function hapusDataAlumni($id) {
            global $conn;
    
            mysqli_query($conn, "DELETE FROM alumni WHERE id = $id");
            return mysqli_affected_rows($conn);
        }

?>