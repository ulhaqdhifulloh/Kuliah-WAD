<?php
if (!isset($_GET['angka']) || $_GET['angka'] === '') {
    echo "Bilangan belum diisi.";
    exit;
}

$n = (int) $_GET['angka'];

if ($n < 2) {
    echo "Bilangan harus minimal 2.";
    exit;
}

$pola = [];
for ($i = 1; $i <= $n; $i++) {
    if ($i === 1 || $i === $n) {
        $pola[] = '*';
    } else {
        $pola[] = $i;
    }
}

$hasil = implode(' ', $pola);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pola GET</title>
</head>
<body>
    <p>Input: <?php echo $n; ?></p>
    <p>Hasil: <?php echo $hasil; ?></p>
    <a href="pola_get.php">Kembali</a>
</body>
</html>