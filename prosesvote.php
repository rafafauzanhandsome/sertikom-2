<?php
include 'koneksi.php';
session_start();

// pakai session id_user yang dibuat waktu login user (bukan admin)
$id_user = $_SESSION['id_user']; 
$id_calon = $_POST['id_calon'];


$cek = $koneksi->query("SELECT * FROM voting WHERE id_voting = '$id_user'");
if ($cek->num_rows > 0) {
    header("Location: berhasil.php");
    exit;
}

// simpan vote
$insert = $koneksi->query("INSERT INTO voting (id_voting, id_calon, waktu) VALUES ('$id_user', '$id_calon', NOW())");
if ($insert) {
    header("Location: berhasil.php");
    exit;
} else {
    echo "Gagal memilih calon.";
}

?>



