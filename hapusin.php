<?php
include "koneksi.php";

// cek apakah ada id_calon yang dikirim lewat URL
if (isset($_GET['id_calon'])) {
    $id = $_GET['id_calon'];

    // ambil data foto dulu
    $getFoto = mysqli_query($conn, "SELECT foto FROM calon_ketua WHERE id_calon='$id'");
    $dataFoto = mysqli_fetch_assoc($getFoto);

    // hapus file foto kalau ada
    if ($dataFoto && file_exists($dataFoto['foto'])) {
        unlink($dataFoto['foto']);
    }

    // hapus dari database
    $hapus = mysqli_query($conn, "DELETE FROM calon_ketua WHERE id_calon='$id'");

    if ($hapus) {
        echo "<script>alert('Data berhasil dihapus'); window.location='calon_ketua.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data'); window.location='calon_ketua.php';</script>";
    }
} else {
    echo "<script>alert('ID calon tidak ditemukan'); window.location='calon_ketua.php';</script>";
}
?>
