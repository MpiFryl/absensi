<?php
session_start();
include "../../conn.php";

$username = $_POST['username'];
$password = $_POST['password'];
$role_input = $_POST['role'] ?? 'user';

$query = "SELECT * FROM user WHERE username='$username'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($data) {
    $role_db = $data['role'];

    if ($role_input !== $role_db) {
        echo "<script>
            alert('Akses ditolak! Anda mencoba login sebagai $role_input, tetapi akun ini adalah $role_db.');
            window.location='../login.php?role=$role_input';
        </script>";
        exit;
    }

    if (password_verify($password, $data['password'])) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $role_db;

        $update = "UPDATE user SET reg_date = NOW() WHERE username='$username'";
        mysqli_query($conn, $update);

        if ($role_db == "admin") {
            echo "<script>
                alert('Selamat datang, $username!');
                window.location='../../admin/manage.php';
            </script>";
        } else {
            echo "<script>
                alert('Selamat datang, $username!');
                window.location='../../user/form.php';
            </script>";
        }
        exit;
    } else {
        echo "<script>
            alert('Password salah!');
            window.location='../login.php?role=$role_input';
        </script>";
    }
} else {
    echo "<script>
        alert('Username tidak ditemukan!');
        window.location='../login.php?role=$role_input';
    </script>";
}
?>