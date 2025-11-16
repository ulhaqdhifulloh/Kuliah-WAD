<?php
$nama = $_POST['nama'] ?? '';
$nim  = $_POST['nim'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2 - Hasil POST</title>
</head>
<body>
    <h2>Hasil Latihan 2 (POST)</h2>
    <p>Ini data yang ditampilkan menggunakan metode POST</p>
    <p>Nama: <?php echo htmlspecialchars($nama, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>NIM: <?php echo htmlspecialchars($nim, ENT_QUOTES, 'UTF-8'); ?></p>

    <a href="metode_post.php">Kembali</a>
</body>
</html>