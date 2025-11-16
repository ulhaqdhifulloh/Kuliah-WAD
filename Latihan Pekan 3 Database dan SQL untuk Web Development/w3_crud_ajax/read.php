<?php
require 'koneksi.php';

$result = $mysqli->query("SELECT * FROM demo_crud ORDER BY id DESC");

if (!$result) {
    echo "<tr><td colspan='4'>Gagal mengambil data.</td></tr>";
    exit;
}

if ($result->num_rows === 0) {
    echo "<tr><td colspan='4'>Belum ada data.</td></tr>";
    exit;
}

while ($row = $result->fetch_assoc()) {
    $id    = (int) $row['id'];
    $nama  = htmlspecialchars($row['nama'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8');

    echo "<tr>
            <td>{$id}</td>
            <td>{$nama}</td>
            <td>{$email}</td>
            <td>
                <button class='editBtn'
                        data-id='{$id}'
                        data-nama=\"{$nama}\"
                        data-email=\"{$email}\">Edit</button>
                <button class='deleteBtn'
                        data-id='{$id}'>Hapus</button>
            </td>
          </tr>";
}