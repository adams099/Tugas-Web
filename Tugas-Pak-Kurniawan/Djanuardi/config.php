<?php
//koneksi ke database mysql, silahkan di rubah dengan koneksi agan sendiri
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_mahasiswa";
$db = mysqli_connect($server, $user, $password, $nama_database);
if( !$db ){
die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>