<?php
$role = isset($_GET['role']) ? $_GET['role'] : 'user';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Style -->
    <link rel="stylesheet" href="../css/login_register.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <div class="container">
        <a href="../index.php"><i class="fa-solid fa-arrow-left fa-xl"></i></a>
        <h1>Login</h1>
        <form action="process/process_login.php" method="post">
            <div class="form">
                <input type="hidden" name="role" value="<?= $_GET['role'] ?? 'user' ?>">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="button">
                <button type="submit">Konfirmasi</button>
            </div>
            <p>Belum punya akun? <a href="register.php?role=<?= $_GET['role'] ?? 'user' ?>">Daftar</a> </p>
        </form>
    </div>
</body>

</html>