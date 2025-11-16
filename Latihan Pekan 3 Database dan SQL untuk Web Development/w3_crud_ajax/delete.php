<?php
require 'koneksi.php';

if (!isset($_POST['id']) || $_POST['id'] === '') {
    echo "ID tidak valid.";
    exit;
}

$id = (int) $_POST['id'];

$stmt = $mysqli->prepare("DELETE FROM demo_crud WHERE id = ?");
$stmt->bind_param("i", $id);
$ok = $stmt->execute();

echo $ok ? "Data berhasil dihapus." : "Gagal menghapus data.";