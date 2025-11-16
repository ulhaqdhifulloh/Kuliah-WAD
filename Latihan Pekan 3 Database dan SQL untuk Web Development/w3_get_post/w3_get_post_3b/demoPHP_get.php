<?php
$nama = $_GET['nama'] ?? '';
$nim  = $_GET['nim'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3b - Hasil GET</title>
</head>
<body>
    <h2>Hasil Latihan 3b (GET)</h2>
    <p>Ini data yang ditampilkan menggunakan metode GET</p>
    <p>Nama: <?php echo htmlspecialchars($nama, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>NIM: <?php echo htmlspecialchars($nim, ENT_QUOTES, 'UTF-8'); ?></p>

    <a href="metode_get.php">Kembali</a>
</body>
</html>