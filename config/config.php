<?php 
ob_start();

$host = "localhost";
$dbuser = "root";
$dbpass = "123456";
$dbname = "db_inventaris";

// membuat koneksi
$conn = new mysqli("$host","$dbuser","$dbpass","$dbname");

// pengecekan koneksi
if ($conn->connect_error) {
    die("Koneksi gagal :" . $conn->connect_error);
}
// else
// {
//     echo "berhasil";
// }

 ?>