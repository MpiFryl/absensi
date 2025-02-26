<?php
include '../../conn.php'; // Pastikan koneksi ke database

if (isset($_GET['id']) && isset($_GET['tabel'])) {
    $id = $_GET['id'];
    $table = $_GET['tabel'];

    // Query untuk menghapus data
    $sql = "DELETE FROM `$table` WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.href='../manage.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data!'); window.location.href='../manage.php';</script>";
    }
} else {
    echo "<script>alert('Data tidak ditemukan!'); window.location.href='index.php';</script>";
}
?>