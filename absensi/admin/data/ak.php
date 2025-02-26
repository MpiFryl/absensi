<?php
include '../conn.php';

if (!isset($_SESSION['username']) || $_SESSION['role'] !== "admin") {
    header("Location: ../index.php");
    exit;
}

$tables = [
    "10_ak" => "Kelas 10",
    "11_ak" => "Kelas 11",
    "12_ak" => "Kelas 12"
];

?>

<div class="container">
    <h3>Data Absen Analis Kimia</h3>

    <?php foreach ($tables as $table => $title): ?>
        <?php
        $sql = "SELECT * FROM `$table`";
        $result = $conn->query($sql);
        ?>
        <table>
            <thead>
                <tr>
                    <td colspan="6" class="header"><?= $title ?></td>
                </tr>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelamin</th>
                    <th>No. Absen</th>
                    <th>Waktu Absen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php $no = 1; ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['kelamin'] ?></td>
                            <td><?= $row['no_absen'] ?></td>
                            <td><?= $row['waktu_absen'] ?></td>
                            <td>
                                <a href="edit.php?id=<?= $row['id'] ?>&tabel=<?= $table ?>" class="btn-ubah">Ubah</a>
                                <a href="process/hapus.php?id=<?= $row['id'] ?>&tabel=<?= $table ?>" class="btn-hapus"
                                    onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">Belum Ada Yang Absen</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    <?php endforeach; ?>
</div>

<style>
    .container {
        display: flex;
        justify-content: center;
        text-align: center;
        margin-top: 10px;
        flex-direction: column;
        align-items: center;
    }

    table {
        border-collapse: collapse;
        margin-top: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        width: 850px;
        margin-bottom: 30px;
    }

    th {
        background-color: #d84f4f;
        color: white;
        border-bottom: 1px solid black;
    }

    th,
    td {
        padding: 12px;
        text-align: center;
    }

    td:nth-child(2) {
        white-space: normal;
        word-wrap: break-word;
        max-width: 200px;
    }

    td:not(:nth-child(2)) {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    tr .header {
        background-color: #d84f4f;
        color: white;
        font-weight: bold;
    }

    .btn-ubah {
        background-color: #588157;
        text-decoration: none;
        color: white;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 15px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }

    .btn-ubah:hover {
        background-color: #3a5a40;
    }

    .btn-hapus {
        background-color: #c1121f;
        text-decoration: none;
        color: white;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 15px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }

    .btn-hapus:hover {
        background-color: rgb(143, 15, 24);
    }
</style>