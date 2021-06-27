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
//------------------------------------------------------------------------
//------------------------------------------------------------------------
    // CRUD Galeri

    // Untuk menambah data gambar di galeri-----------------------------------

    function tambahGambar($data) {
        global $conn;

        $nama_gambar = htmlspecialchars($data["nama_gambar"]);
        $kategori = htmlspecialchars($data["kategori"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);

        // upload gambar
        $gambar1 = uploadGambar1();
        $gambar2 = uploadGambar2();
        $gambar3 = uploadGambar3();
        $gambar4 = uploadGambar4();
        $gambar5 = uploadGambar5();
        $gambar6 = uploadGambar6();
        $gambar7 = uploadGambar7();
        $gambar8 = uploadGambar8();
        $gambar9 = uploadGambar9();
        $gambar10 = uploadGambar10();

        // if( !$gambar) {
        //     return false;
        // }
        
        $query = "INSERT INTO gambar
                VALUES
                ('', '$nama_gambar', '$kategori', '$deskripsi', '$gambar1', '$gambar2', '$gambar3', '$gambar4', '$gambar5', '$gambar6', '$gambar7', '$gambar8', '$gambar9', '$gambar10') ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Untuk upload gambar di galeri-------------------------------------------

    function uploadGambar1() {
        $namaFile = $_FILES['gambar1']['name'];
        $ukuranFile = $_FILES['gambar1']['size'];
        $error = $_FILES['gambar1']['error'];
        $tmpName = $_FILES['gambar1']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                        alert('pilih gambar 1 terlebih dahulu');
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
        if( $ukuranFile > 52428800 ) {
            echo "<script>
                    alert('ukuran gambar 1 telalu besar!');
                </script>";
            return false;
        }
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tmpName, '../assets/img/portfolio/' . $namaFileBaru);

        return $namaFileBaru;
    }

    function uploadGambar2() {
        $namaFile = $_FILES['gambar2']['name'];
        $ukuranFile = $_FILES['gambar2']['size'];
        $error = $_FILES['gambar2']['error'];
        $tmpName = $_FILES['gambar2']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                        alert('pilih gambar 2 terlebih dahulu');
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
        if( $ukuranFile > 52428800 ) {
            echo "<script>
                    alert('ukuran gambar 2 telalu besar!');
                </script>";
            return false;
        }
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tmpName, '../assets/img/portfolio/' . $namaFileBaru);

        return $namaFileBaru;
    }

    function uploadGambar3() {
        $namaFile = $_FILES['gambar3']['name'];
        $ukuranFile = $_FILES['gambar3']['size'];
        $error = $_FILES['gambar3']['error'];
        $tmpName = $_FILES['gambar3']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                        alert('pilih gambar 3 terlebih dahulu');
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
        if( $ukuranFile > 52428800 ) {
            echo "<script>
                    alert('ukuran gambar 3 telalu besar!');
                </script>";
            return false;
        }
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tmpName, '../assets/img/portfolio/' . $namaFileBaru);

        return $namaFileBaru;
    }

    function uploadGambar4() {
        $namaFile = $_FILES['gambar4']['name'];
        $ukuranFile = $_FILES['gambar4']['size'];
        $error = $_FILES['gambar4']['error'];
        $tmpName = $_FILES['gambar4']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                        alert('pilih gambar 4 terlebih dahulu');
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
        if( $ukuranFile > 52428800 ) {
            echo "<script>
                    alert('ukuran gambar 4 telalu besar!');
                </script>";
            return false;
        }
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tmpName, '../assets/img/portfolio/' . $namaFileBaru);

        return $namaFileBaru;
    }

    function uploadGambar5() {
        $namaFile = $_FILES['gambar5']['name'];
        $ukuranFile = $_FILES['gambar5']['size'];
        $error = $_FILES['gambar5']['error'];
        $tmpName = $_FILES['gambar5']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                        alert('pilih gambar 5 terlebih dahulu');
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
        if( $ukuranFile > 52428800 ) {
            echo "<script>
                    alert('ukuran gambar 5 telalu besar!');
                </script>";
            return false;
        }
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tmpName, '../assets/img/portfolio/' . $namaFileBaru);

        return $namaFileBaru;
    }

    function uploadGambar6() {
        $namaFile = $_FILES['gambar6']['name'];
        $ukuranFile = $_FILES['gambar6']['size'];
        $error = $_FILES['gambar6']['error'];
        $tmpName = $_FILES['gambar6']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                        alert('pilih gambar 6 terlebih dahulu');
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
        if( $ukuranFile > 52428800 ) {
            echo "<script>
                    alert('ukuran gambar 6 telalu besar!');
                </script>";
            return false;
        }
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tmpName, '../assets/img/portfolio/' . $namaFileBaru);

        return $namaFileBaru;
    }

    function uploadGambar7() {
        $namaFile = $_FILES['gambar7']['name'];
        $ukuranFile = $_FILES['gambar7']['size'];
        $error = $_FILES['gambar7']['error'];
        $tmpName = $_FILES['gambar7']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                        alert('pilih gambar 7 terlebih dahulu');
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
        if( $ukuranFile > 52428800 ) {
            echo "<script>
                    alert('ukuran gambar 7 telalu besar!');
                </script>";
            return false;
        }
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tmpName, '../assets/img/portfolio/' . $namaFileBaru);

        return $namaFileBaru;
    }

    function uploadGambar8() {
        $namaFile = $_FILES['gambar8']['name'];
        $ukuranFile = $_FILES['gambar8']['size'];
        $error = $_FILES['gambar8']['error'];
        $tmpName = $_FILES['gambar8']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                        alert('pilih gambar 8 terlebih dahulu');
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
        if( $ukuranFile > 52428800 ) {
            echo "<script>
                    alert('ukuran gambar 8 telalu besar!');
                </script>";
            return false;
        }
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tmpName, '../assets/img/portfolio/' . $namaFileBaru);

        return $namaFileBaru;
    }

    function uploadGambar9() {
        $namaFile = $_FILES['gambar9']['name'];
        $ukuranFile = $_FILES['gambar9']['size'];
        $error = $_FILES['gambar9']['error'];
        $tmpName = $_FILES['gambar9']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                        alert('pilih gambar 9 terlebih dahulu');
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
        if( $ukuranFile > 52428800 ) {
            echo "<script>
                    alert('ukuran gambar 9 telalu besar!');
                </script>";
            return false;
        }
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tmpName, '../assets/img/portfolio/' . $namaFileBaru);

        return $namaFileBaru;
    }

    function uploadGambar10() {
        $namaFile = $_FILES['gambar10']['name'];
        $ukuranFile = $_FILES['gambar10']['size'];
        $error = $_FILES['gambar10']['error'];
        $tmpName = $_FILES['gambar10']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                        alert('pilih gambar 10 terlebih dahulu');
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
        if( $ukuranFile > 52428800 ) {
            echo "<script>
                    alert('ukuran gambar 10 telalu besar!');
                </script>";
            return false;
        }
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tmpName, '../assets/img/portfolio/' . $namaFileBaru);

        return $namaFileBaru;
    }

    // Untuk mengubah / mengedit gambar di galeri----------------------------------------------

    function ubahGambar($data) {
        global $conn;

        $id = $data["id"];
        $nama_gambar = htmlspecialchars($data["nama_gambar"]);
        $kategori = htmlspecialchars($data["kategori"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $gambarLama1 = htmlspecialchars($data["gambarLama1"]);
        $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
        $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
        $gambarLama4 = htmlspecialchars($data["gambarLama4"]);
        $gambarLama5 = htmlspecialchars($data["gambarLama5"]);
        $gambarLama6 = htmlspecialchars($data["gambarLama6"]);
        $gambarLama7 = htmlspecialchars($data["gambarLama7"]);
        $gambarLama8 = htmlspecialchars($data["gambarLama8"]);
        $gambarLama9 = htmlspecialchars($data["gambarLama9"]);
        $gambarLama10 = htmlspecialchars($data["gambarLama10"]);
        // cek apakah user pilih gambar baru atau tidak

        // Gambar 1
        if( $_FILES['gambar1']['error'] === 4 ) {
            $gambar1 = $gambarLama1;
        }else{
            $gambar1 = uploadGambar1();
        }

        // Gambar 2

        if( $_FILES['gambar2']['error'] === 4 ) {
            $gambar2 = $gambarLama2;
        }else{
            $gambar2 = uploadGambar2();
        }

        // Gambar 3

        if( $_FILES['gambar3']['error'] === 4 ) {
            $gambar3 = $gambarLama3;
        }else{
            $gambar3 = uploadGambar3();
        }

        // Gambar 4

        if( $_FILES['gambar4']['error'] === 4 ) {
            $gambar4 = $gambarLama4;
        }else{
            $gambar4 = uploadGambar4();
        }

        // Gambar 5

        if( $_FILES['gambar5']['error'] === 4 ) {
            $gambar5 = $gambarLama5;
        }else{
            $gambar5 = uploadGambar5();
        }

        // Gambar 6

        if( $_FILES['gambar6']['error'] === 4 ) {
            $gambar6 = $gambarLama6;
        }else{
            $gambar6 = uploadGambar6();
        }

        // Gambar 7

        if( $_FILES['gambar7']['error'] === 4 ) {
            $gambar7 = $gambarLama7;
        }else{
            $gambar7 = uploadGambar7();
        }

        // Gambar 8

        if( $_FILES['gambar8']['error'] === 4 ) {
            $gambar8 = $gambarLama8;
        }else{
            $gambar8 = uploadGambar8();
        }

        // Gambar 9

        if( $_FILES['gambar9']['error'] === 4 ) {
            $gambar9 = $gambarLama9;
        }else{
            $gambar9 = uploadGambar9();
        }

        // Gambar 10

        if( $_FILES['gambar10']['error'] === 4 ) {
            $gambar10 = $gambarLama10;
        }else{
            $gambar10 = uploadGambar10();
        }
        
        // membuat variabel untuk menampung query dan data-nya sekalian
        $query = "UPDATE gambar SET
                    nama_gambar = '$nama_gambar',
                    kategori = '$kategori',
                    deskripsi = '$deskripsi',
                    gambar1 = '$gambar1',
                    gambar2 = '$gambar2',
                    gambar3 = '$gambar3',
                    gambar4 = '$gambar4',
                    gambar5 = '$gambar5',
                    gambar6 = '$gambar6',
                    gambar7 = '$gambar7',
                    gambar8 = '$gambar8',
                    gambar9 = '$gambar9',
                    gambar10 = '$gambar10'
                WHERE id = $id";
        mysqli_query($conn, $query);
        // jalankan query-nya
        return mysqli_affected_rows($conn);
    }

    // Untuk menghapus gambar di galeri------------------------------------------------------

    function hapusGambar($id) {
        global $conn;

        mysqli_query($conn, "DELETE FROM gambar WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
    // CRUD Artikel

    function tambahArtikel($data) {
        global $conn;

        $judul = htmlspecialchars($data["judul"]);
        $p1 = htmlspecialchars($data["p1"]);
        $p2 = htmlspecialchars($data["p2"]);
        $p3 = htmlspecialchars($data["p3"]);
        $p4 = htmlspecialchars($data["p4"]);
        $p5 = htmlspecialchars($data["p5"]);
        $p6 = htmlspecialchars($data["p6"]);
        $p7 = htmlspecialchars($data["p7"]);
        $p8 = htmlspecialchars($data["p8"]);
        $p9 = htmlspecialchars($data["p9"]);
        $p10 = htmlspecialchars($data["p10"]);
        $p11 = htmlspecialchars($data["p11"]);
        $p12 = htmlspecialchars($data["p12"]);
        $p13 = htmlspecialchars($data["p13"]);
        $p14 = htmlspecialchars($data["p14"]);
        $p15 = htmlspecialchars($data["p15"]);
        $p16 = htmlspecialchars($data["p16"]);
        $p17 = htmlspecialchars($data["p17"]);
        $p18 = htmlspecialchars($data["p18"]);
        $p19 = htmlspecialchars($data["p19"]);
        $p20 = htmlspecialchars($data["p20"]);
        $p21 = htmlspecialchars($data["p21"]);
        $p22 = htmlspecialchars($data["p22"]);
        $p23 = htmlspecialchars($data["p23"]);
        $p24 = htmlspecialchars($data["p24"]);
        $p25 = htmlspecialchars($data["p25"]);
        $p26 = htmlspecialchars($data["p26"]);
        $p27 = htmlspecialchars($data["p27"]);
        $p28 = htmlspecialchars($data["p28"]);
        $p29 = htmlspecialchars($data["p29"]);
        $p30 = htmlspecialchars($data["p30"]);

        // upload gambar -- cek apakah gambar ada atau tidak
        $logo = uploadLogoArtikel1();
        $gambar1 = uploadGambarArtikel1();
        $gambar2 = uploadGambarArtikel2();
        $gambar3 = uploadGambarArtikel3();
        // if( !$gambar1) {
        //     return false;
        // }
        
        $query = "INSERT INTO artikel
                VALUES
                ('', '$judul', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15', '$p16', '$p17', '$p18', '$p19', '$p20', '$p21', '$p22', '$p23', '$p24', '$p25', '$p26', '$p27', '$p28', '$p29', '$p30', '$logo', '$gambar1', '$gambar2', '$gambar3') ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function uploadLogoArtikel1() {
        $namaFile = $_FILES['logo']['name'];
        $ukuranFile = $_FILES['logo']['size'];
        $error = $_FILES['logo']['error'];
        $tmpName = $_FILES['logo']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                        alert('pilih logo terlebih dahulu');
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
        if( $ukuranFile > 52428800 ) {
            echo "<script>
                    alert('ukuran logo telalu besar!');
                </script>";
            return false;
        }
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tmpName, '../assets/img/artikel/' .$namaFileBaru);

        return $namaFileBaru;
    }

    function uploadGambarArtikel1() {
        $namaFile = $_FILES['gambar1']['name'];
        $ukuranFile = $_FILES['gambar1']['size'];
        $error = $_FILES['gambar1']['error'];
        $tmpName = $_FILES['gambar1']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                        alert('pilih gambar artikel 1 terlebih dahulu');
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
        if( $ukuranFile > 52428800 ) {
            echo "<script>
                    alert('ukuran gambar artikel 1 telalu besar!');
                </script>";
            return false;
        }
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tmpName, '../assets/img/artikel/' .$namaFileBaru);

        return $namaFileBaru;
    }

    function uploadGambarArtikel2() {
        $namaFile = $_FILES['gambar2']['name'];
        $ukuranFile = $_FILES['gambar2']['size'];
        $error = $_FILES['gambar2']['error'];
        $tmpName = $_FILES['gambar2']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                        alert('pilih gambar artikel 2 terlebih dahulu');
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
        if( $ukuranFile > 52428800 ) {
            echo "<script>
                    alert('ukuran gambar artikel2 telalu besar!');
                </script>";
            return false;
        }
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tmpName, '../assets/img/artikel/' .$namaFileBaru);

        return $namaFileBaru;
    }

    function uploadGambarArtikel3() {
        $namaFile = $_FILES['gambar3']['name'];
        $ukuranFile = $_FILES['gambar3']['size'];
        $error = $_FILES['gambar3']['error'];
        $tmpName = $_FILES['gambar3']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                        alert('pilih gambar artikel 3 terlebih dahulu');
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
        if( $ukuranFile > 52428800 ) {
            echo "<script>
                    alert('ukuran gambar artikel 3 telalu besar!');
                </script>";
            return false;
        }
        
        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tmpName, '../assets/img/artikel/' .$namaFileBaru);

        return $namaFileBaru;
    }

    function ubahArtikel($data) {
        global $conn;

        $id = $data["id"];
        $judul = htmlspecialchars($data["judul"]);
        $p1 = htmlspecialchars($data["p1"]);
        $p2 = htmlspecialchars($data["p2"]);
        $p3 = htmlspecialchars($data["p3"]);
        $p4 = htmlspecialchars($data["p4"]);
        $p5 = htmlspecialchars($data["p5"]);
        $p6 = htmlspecialchars($data["p6"]);
        $p7 = htmlspecialchars($data["p7"]);
        $p8 = htmlspecialchars($data["p8"]);
        $p9 = htmlspecialchars($data["p9"]);
        $p10 = htmlspecialchars($data["p10"]);
        $p11 = htmlspecialchars($data["p11"]);
        $p12 = htmlspecialchars($data["p12"]);
        $p13 = htmlspecialchars($data["p13"]);
        $p14 = htmlspecialchars($data["p14"]);
        $p15 = htmlspecialchars($data["p15"]);
        $p16 = htmlspecialchars($data["p16"]);
        $p17 = htmlspecialchars($data["p17"]);
        $p18 = htmlspecialchars($data["p18"]);
        $p19 = htmlspecialchars($data["p19"]);
        $p20 = htmlspecialchars($data["p20"]);
        $p21 = htmlspecialchars($data["p21"]);
        $p22 = htmlspecialchars($data["p22"]);
        $p23 = htmlspecialchars($data["p23"]);
        $p24 = htmlspecialchars($data["p24"]);
        $p25 = htmlspecialchars($data["p25"]);
        $p26 = htmlspecialchars($data["p26"]);
        $p27 = htmlspecialchars($data["p27"]);
        $p28 = htmlspecialchars($data["p28"]);
        $p29 = htmlspecialchars($data["p29"]);
        $p30 = htmlspecialchars($data["p30"]);
        $logoLama1 = htmlspecialchars($data["logoLama1"]);
        $gambarLama1 = htmlspecialchars($data["gambarLama1"]);
        $gambarLama2 = htmlspecialchars($data["gambarLama2"]);
        $gambarLama3 = htmlspecialchars($data["gambarLama3"]);
        // cek apakah user pilih gambar baru atau tidak
        
        // Gambar Artikel 1
        if( $_FILES['logo']['error'] === 4 ) {
            $logo = $logoLama1;
        }else{
            $logo = uploadLogoArtikel1();
        }

        if( $_FILES['gambar1']['error'] === 4 ) {
            $gambar1 = $gambarLama1;
        }else{
            $gambar1 = uploadGambarArtikel1();
        }
        
        if( $_FILES['gambar2']['error'] === 4 ) {
            $gambar2 = $gambarLama2;
        }else{
            $gambar2 = uploadGambarArtikel2();
        }

        if( $_FILES['gambar3']['error'] === 4 ) {
            $gambar3 = $gambarLama3;
        }else{
            $gambar3 = uploadGambarArtikel3();
        }

        // membuat variabel untuk menampung query dan data-nya sekalian
        $query = "UPDATE artikel SET
                    judul = '$judul',
                    p1 = '$p1',
                    p2 = '$p2',
                    p3 = '$p3',
                    p4 = '$p4',
                    p5 = '$p5',
                    p6 = '$p6',
                    p7 = '$p7',
                    p8 = '$p8',
                    p9 = '$p9',
                    p10 = '$p10',
                    p11 = '$p11',
                    p12 = '$p12',
                    p13 = '$p13',
                    p14 = '$p14',
                    p15 = '$p15',
                    p16 = '$p16',
                    p17 = '$p17',
                    p18 = '$p18',
                    p19 = '$p19',
                    p20 = '$p20',
                    p21 = '$p21',
                    p22 = '$p22',
                    p23 = '$p23',
                    p24 = '$p24',
                    p25 = '$p25',
                    p26 = '$p26',
                    p27 = '$p27',
                    p28 = '$p28',
                    p29 = '$p29',
                    p30 = '$p30',
                    logo = '$logo',
                    gambar1 = '$gambar1',
                    gambar2 = '$gambar2',
                    gambar3 = '$gambar3'
                WHERE id = $id";
        mysqli_query($conn, $query);
        // jalankan query-nya
        return mysqli_affected_rows($conn);
    }

    function hapusArtikel($id) {
        global $conn;

        mysqli_query($conn, "DELETE FROM artikel WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

// ------------------------------------------------------------------------------------------------------------------------
    // Registrasi Admin
// ------------------------------------------------------------------------------------------------------------------------
    function registrasi($data) { 
        global $conn;

        $username = strtolower(stripslashes ($data["username"]) );
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        // cek username sudah ada apa belum
        $result = mysqli_query($conn, "SELECT username FROM admins 
            WHERE username = '$username'");
            if ( mysqli_fetch_assoc($result) ){
                echo "<script>
                        alert('username sudah terdaftar') 
                    </script>";

                return false;
            }

        // cek konfirmasi password
        if ( $password != $password2 ) {
            echo    "<script>
                        alert('konfirmasi password salah')
                    </script>";

            return false;
        }
        
        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        // tambah userbaru ke database
        mysqli_query($conn, "INSERT INTO admins VALUES('', '$username', '$password')");
        
        return mysqli_affected_rows($conn);
    }
?>