<?php
include "../../conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Cek apakah username sudah ada
    $check_query = "SELECT username FROM user WHERE username = '$username'";
    $check_result = $conn->query($check_query);

    if ($check_result->num_rows > 0) {
        echo "<script>
            alert('Username sudah digunakan, pilih username lain!');
            window.location='../register.php?role=$role';
        </script>";
        exit;
    }

    // Simpan data pengguna
    $sql = "INSERT INTO user (username, email, password, role) VALUES ('$username', '$email', '$hashed_password', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Berhasil Membuat Akun!');
            window.location='../login.php?role=$role';
        </script>";
        exit;
    } else {
        echo "<script>alert('Terjadi Kesalahan: " . $conn->error . "');</script>";
    }

    $conn->close();
}
?>