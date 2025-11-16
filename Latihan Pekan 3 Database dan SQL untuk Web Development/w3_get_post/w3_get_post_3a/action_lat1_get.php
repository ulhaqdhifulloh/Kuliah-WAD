<?php
$nama = $_GET['nama_lengkap'] ?? '';
$nim  = $_GET['nim'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3a - Hasil GET Latihan 1</title>
</head>
<body>
    <h2>Data dari Form (GET)</h2>

    <p>Ini data yang dikirimkan dari form_lat1_get.php</p>
    <p>Nama Lengkap: 
        <?php echo htmlspecialchars($nama, ENT_QUOTES, 'UTF-8'); ?>
    </p>
    <p>NIM: 
        <?php echo htmlspecialchars($nim, ENT_QUOTES, 'UTF-8'); ?>
    </p>

    <a href="form_lat1_get.php">Kembali</a>
</body>
</html>