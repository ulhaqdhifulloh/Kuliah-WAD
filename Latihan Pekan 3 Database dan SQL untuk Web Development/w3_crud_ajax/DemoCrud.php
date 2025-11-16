<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dhifulloh Dhiya Ulhaq</title>
</head>
<body>
    <h2>CRUD Mahasiswa (AJAX)</h2>

    <form id="formDemo">
        <input type="hidden" id="id" name="id">

        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" placeholder="Masukkan Nama"><br>
        <span class="error" id="errorName"></span><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" placeholder="Masukkan Email"><br>
        <span class="error" id="errorEmail"></span><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <button class="addBtn">Tambah Data Baru</button>
    <div id="statusMessage"></div>

    <h3>Data Mahasiswa</h3>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="dataDemo">
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validate.js"></script>
</body>
</html>