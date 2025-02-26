<?php
include "../../conn.php";

if (isset($_POST['btn_hapus'])) {
    $tables = ["10_ak", "10_fm", "10_pplg", "11_ak", "11_fm", "11_pplg", "12_ak"];

    foreach ($tables as $table) {
        $sql = "DELETE FROM `$table`";
        $conn->query($sql);
    }

    echo "
<script>alert('Semua data berhasil dihapus!'); window.location.href = '../manage.php';</script>";
}

$conn->close();
?>