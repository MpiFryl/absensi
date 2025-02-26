<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== "admin") {
    header("Location: ../index.php");
    exit;
}

include "../conn.php";

$query = "SELECT reg_date FROM user WHERE username = '" . $_SESSION['username'] . "'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
$time = $data['reg_date'] ? date("d-m-Y H:i:s", strtotime($data['reg_date'])) : "Belum Pernah Login";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Style -->
    <link rel="stylesheet" href="../css/manage.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <div class="navbar">    
        <div class="start">
            <form action="process/hapus_all.php" method="post"
                onsubmit="return confirm('Fungsi ini digunakan untuk menghapus semua data absen, apa anda ingin lanjut menghapus?');">
                <button type="submit" name="btn_hapus">Hapus Data</button>
            </form>
            <span>Halo admin!</span>
        </div>
        <div class="end">
            <p>Waktu Login: <strong><?= $time; ?></strong></p>
            <a href="../index.php"><i class="fa-solid fa-right-from-bracket fa-xl"></i></a>
        </div>
    </div>

    <div class="main">
        <div class="jurusan">
            <ul>
                <li><a href="manage.php?jurusan=ak" class="ak"><img src="../img/ak.png" alt="">Analis Kimia</a></li>
                <li><a href="manage.php?jurusan=fm" class="fm"><img src="../img/fm.png" alt="">Farmasi</a></li>
                <li><a href="manage.php?jurusan=pplg" class="pplg"><img src="../img/pplg.png" alt="">Pengembangan
                        Perangkat Lunak dan Game</a></li>
            </ul>
        </div>
    </div>

    <hr>

    <!-- Bagian untuk menampilkan tabel data -->
    <div class="container">
        <?php
        // Set nilai default jika tidak ada parameter jurusan di URL
        $jurusan = isset($_GET['jurusan']) ? $_GET['jurusan'] : "ak";

        // Pastikan hanya file yang diizinkan yang bisa di-include
        $allowed_files = ["ak", "fm", "pplg"];
        if (in_array($jurusan, $allowed_files)) {
            include "data/$jurusan.php";
        } else {
            echo "<p style='text-align: center; color: red;'>Jurusan tidak ditemukan!</p>";
        }
        ?>
    </div>

</body>

</html>