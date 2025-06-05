<?php

//koneksi ke data base
$host = "localhost"; // host database
$user = "root"; // username database
$pass = ""; // password database
$db = "db_osis"; // nama database

$koneksi = new mysqli($host, $user, $pass, $db);
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
} 
$conn = mysqli_connect("localhost", "root", "", "db_osis");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// else {
//     echo "Koneksi berhasil";
// }