<?php
include "../../conn.php";

// Ambil data dari form
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$kelamin = $_POST['kelamin'];
$no_absen = $_POST['no_absen'];

// Mapping jurusan agar sesuai dengan tabel database
$jurusan_map = [
    "AK" => "ak",
    "Farmasi" => "fm",
    "PPLG" => "pplg"
];

// Pastikan jurusan valid
if (!isset($jurusan_map[$jurusan])) {
    echo "<script>
            alert('Jurusan tidak valid!');
            window.location.href = '../index.php';
          </script>";
    exit();
}

// Buat nama tabel berdasarkan kelas dan jurusan
$tabel = "{$kelas}_{$jurusan_map[$jurusan]}";

// **Cek apakah data sudah ada**
$cek_sql = "SELECT * FROM $tabel WHERE nama = '$nama' OR no_absen = '$no_absen'";
$result = $conn->query($cek_sql);

if ($result->num_rows > 0) {
    echo "<script>
            alert('Nama atau No Absen sudah digunakan!');
            window.location.href = '../form.php';
          </script>";
} else {
    // Jika belum ada, lakukan INSERT
    $sql = "INSERT INTO $tabel (nama, kelamin, no_absen) 
            VALUES ('$nama', '$kelamin', '$no_absen')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Absen berhasil!');
                window.location.href = '../../index.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal absen: " . $conn->error . "');
                window.location.href = '../form.php';
              </script>";
    }
}

// Tutup koneksi
$conn->close();
?>