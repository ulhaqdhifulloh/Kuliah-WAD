<?php
require 'koneksi.php';

$name  = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$id    = trim($_POST['id'] ?? '');

if ($name === '' || $email === '') {
    echo "Nama dan email wajib diisi.";
    exit;
}

if ($id === '') {
    $stmt = $mysqli->prepare(
        "INSERT INTO demo_crud (nama, email) VALUES (?, ?)"
    );
    $stmt->bind_param("ss", $name, $email);
    $ok = $stmt->execute();

    echo $ok ? "Data baru berhasil disimpan." : "Gagal menyimpan data.";
} else {
    $id = (int) $id;
    $stmt = $mysqli->prepare(
        "UPDATE demo_crud SET nama = ?, email = ? WHERE id = ?"
    );
    $stmt->bind_param("ssi", $name, $email, $id);
    $ok = $stmt->execute();

    echo $ok ? "Data berhasil diupdate." : "Gagal mengupdate data.";
}