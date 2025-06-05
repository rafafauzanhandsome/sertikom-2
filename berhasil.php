<?php
session_start();
include 'koneksi.php';

// ambil id user dari session
$id_user = $_SESSION['id_user'] ?? null;

if ($id_user) {
    // cari data voting terbaru berdasarkan id_user
    $result = $koneksi->query("SELECT id_calon FROM voting WHERE id_voting = '$id_user' ORDER BY waktu DESC LIMIT 1");
    $row = $result->fetch_assoc();

    if ($row) {
        $nomor_calon = $row['id_calon'];
        echo "<h2>Selamat! Anda telah menyoblos calon nomor <strong>$nomor_calon</strong>.</h2>";
    } else {
        echo "<h2>Anda belum memilih calon manapun.</h2>";
    }
} else {
    echo "<h2>Username anda tidak dapat ditemukan. Silakan login terlebih dahulu.</h2>";
}
?>
