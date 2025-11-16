<?php
if (!isset($_POST['angka']) || $_POST['angka'] === '') {
    echo "Bilangan belum diisi.";
    exit;
}

$angka = (int) $_POST['angka'];

if ($angka % 2 === 0) {
    $tipe = "bilangan genap";
} else {
    $tipe = "bilangan ganjil";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Ganjil / Genap</title>
</head>
<body>
    <p><?php echo $angka . " adalah " . $tipe; ?></p>
    <a href="genap_post.php">Kembali</a>
</body>
</html>