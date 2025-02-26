<?php
include '../../conn.php';

if (isset($_POST['id']) && isset($_POST['tabel'])) {
    $id = (int) $_POST['id'];
    $tabel = $_POST['tabel'];
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $no_absen = (int) $_POST['no_absen'];

    // Query update data
    $query = "UPDATE `$tabel` SET 
                nama = '$nama', 
                kelamin = '$kelamin', 
                no_absen = $no_absen 
              WHERE id = $id";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location.href = '../manage.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data!'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Akses tidak valid!'); window.history.back();</script>";
}
?>
