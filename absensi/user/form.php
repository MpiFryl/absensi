<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absen</title>

    <!-- Style -->
    <link rel="stylesheet" href="../css/form.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <div class="container">
        <a href="../index.php"> <i class="fa-solid fa-arrow-left fa-xl"></i></a>
        <div class="main">

            <div class="header">
                <h1>Absen</h1>
            </div>
            <form action="process/process_form.php" method="post">

                <div class="form">
                    <input type="text" placeholder="Nama" name="nama" required>
                    <select name="kelas" required>
                        <option value="kelas">Kelas</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <select name="jurusan" required>
                        <option value="jurusan">Jurusan</option>
                        <option value="AK">Analis Kimia</option>
                        <option value="Farmasi">Farmasi</option>
                        <option value="PPLG">Pengembangan Perangkat Lunak dan Game</option>
                    </select>
                    <select name="kelamin" required>
                        <option value="kelamin">Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <input type="number" placeholder="No Absen" name="no_absen" min="1" max="40" required>
                    <div class="button">
                        <button type="submit">Konfirmasi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>