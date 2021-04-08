

<?php
// deklarasi parameter koneksi database
$server   = "localhost";
$username = "root";
$password = "";
$database = "db_arsip_surat_psbr";

// koneksi database
$koneksi = new mysqli($server, $username, $password, $database);

// cek koneksi
if ($koneksi->connect_error) {
    die('Koneksi Database Gagal : ' . $koneksi->connect_error);
}
?>