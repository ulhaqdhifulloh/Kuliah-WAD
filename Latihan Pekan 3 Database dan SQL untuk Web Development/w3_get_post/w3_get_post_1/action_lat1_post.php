<?php
$nama = $_POST['nama_lengkap'] ?? '';
$nim  = $_POST['nim'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1 - Hasil POST</title>
</head>
<body>
    <h2>Data dari Form (POST)</h2>

    <p>Ini data yang dikirimkan dari form_lat1_post.php</p>
    <p>Nama Lengkap: 
        <?php echo htmlspecialchars($nama, ENT_QUOTES, 'UTF-8'); ?>
    </p>
    <p>NIM: 
        <?php echo htmlspecialchars($nim, ENT_QUOTES, 'UTF-8'); ?>
    </p>

    <a href="form_lat1_post.php">Kembali</a>
</body>
</html>