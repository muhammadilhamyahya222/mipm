<?php

session_start();

if( !isset($_SESSION["login_ppdb"]) ){
    header("Location: login.php");
    exit;
}

require_once __DIR__ . '/../vendor/autoload.php';

require 'function.php';

$id = $_SESSION["id"];
$ppdb = query("SELECT * FROM ppdb WHERE id = $id")[0];

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../assets/css/cetak.css">
            <title>Cetak Formulir PPDB</title>
        </head>
        <body>
            <div class="header">
                <img src="../assets/img/icon.png" alt="" width="70">
                <h3>YAYASAN BADAN WAQAF KH. ADLAN ALY</h3>
                <H5>KEMENKUMHAM Nomor AHU-0008778.AH.01.04. Tahun 2015</H5>
                <h3>MADRASAH IBTIDAIYAH PERGURUAN MU`ALLIMAT</h3>
                <h4>STATUS TERAKREDITASI "A"</h4>
                <h5>NSM : 111235170045</h5>
                <h5>NPSM : 6017375</h5>
                <h6>Alamat : Jl. MAsjid Jami` Cukir Diwek Jombang Telp (0321) 851 382 Email : mipm_cukir@yahoo.co.id</h6>
            </div>
            <div class="data_ppdb">
                <h3>FORMULIR PENDAFTARAN</h3>
                <h3>TAHUM PELAJARAN 2020/2021</h3>

                <h6>I. SISWA</h6>
                <p>01. Nama Lengkap             : '.$ppdb["nama"].'</p>
                <p>02. Jenis Kelamin            : '.$ppdb["jk"].'</p>
                <p>03. Tempat, Tanggal Lahir    : '.$ppdb["tmp_lahir"].', '.$ppdb["tgl_lahir"].'</p>
                <p>05. Alamat Siswa             : '.$ppdb["alamat_siswa_jalan"].', '.$ppdb["alamat_siswa_desa_kelurahan"].', '.$ppdb["alamat_siswa_kecamatan"].', '.$ppdb["alamat_siswa_kab_kota"].', '.$ppdb["alamat_siswa_provinsi"].'.</p>
                <h6>II. ORANG TUA</h6>
                <p>06. Nama Ayah                : '.$ppdb["nama_ayah"].'</p>
                <p>07. Nama Ibu                 : '.$ppdb["nama_ibu"].'</p>
                <p>08. Nomer Telepon            : '.$ppdb["no_telepon"].'</p>
                <p>09. Pendapatan Ortu          : '.$ppdb["pendapatan_ortu"].'</p>
                <p>10. Kondisi Ortu             : '.$ppdb["kondisi_ortu"].'</p>
                <p>11. Alamat Orang Tua         : '.$ppdb["alamat_ortu_jalan"].', '.$ppdb["alamat_ortu_desa_kelurahan"].', '.$ppdb["alamat_ortu_kecamatan"].', '.$ppdb["alamat_ortu_kab_kota"].', '.$ppdb["alamat_ortu_provinsi"].'.</p>
                <h6>MASUK MADRASAH INI</h6>
                <p>Dari Sekolah                 : '.$ppdb["asal_sekolah"].'</p>
                <p>Tahun Lulus                  : '.$ppdb["tahun_lulus"].'</p>
                <p>Prestasi Yang Pernah dicapai : '.$ppdb["prestasi"].'</p>
                <p>Nomer Peserta                : '.$ppdb["no_peserta"].'</p>
        </div>


        </body>
        </html>';
$mpdf->WriteHTML($html);
$mpdf->Output('Formuli PPDB.pdf', 'I');

?>



