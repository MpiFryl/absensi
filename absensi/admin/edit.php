<?php
session_start();
include '../conn.php';

if (!isset($_SESSION['username']) || $_SESSION['role'] !== "admin") {
    header("Location: ../index.php");
    exit;
}


if (isset($_GET['id']) && isset($_GET['tabel'])) {
    $id = (int) $_GET['id'];
    $tabel = $_GET['tabel'];

    $query = "SELECT * FROM `$tabel` WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        die("Data tidak ditemukan atau terjadi kesalahan!");
    }
} else {
    die("Akses tidak valid!");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>

    <!-- Style -->
    <link rel="stylesheet" href="../css/edit.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <div class="container">
        <a href="manage.php"><i class="fa-solid fa-arrow-left fa-xl"></i></a>
        <div class="header">
            <h1>Ubah</h1>
        </div>
        <form action="process/process_edit.php" method="post">
            <input type="hidden" name="id" value="<?= $data['id']; ?>">
            <input type="hidden" name="tabel" value="<?= htmlspecialchars($tabel); ?>">

            <div class="form">
                <input type="text" placeholder="Nama" name="nama" value="<?= htmlspecialchars($data['nama']); ?>"
                    required>

                <select name="kelamin" required>
                    <option value="Laki-laki" <?= ($data['kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki
                    </option>
                    <option value="Perempuan" <?= ($data['kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan
                    </option>
                </select>

                <input type="number" placeholder="No Absen" name="no_absen" min="1" max="40"
                    value="<?= htmlspecialchars($data['no_absen']); ?>" required>

                <div class="button">
                    <button type="submit">Konfirmasi</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>