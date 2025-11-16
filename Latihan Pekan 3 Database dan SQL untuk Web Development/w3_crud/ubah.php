<?php
    include_once ("koneksi.php");

    $id = null;
    if (isset($_GET['id'])) {
        $id = (int) $_GET['id'];
    } elseif (isset($_POST['id'])) {
        $id = (int) $_POST['id'];
    } else {
        header("Location:tampil.php");
        exit;
    }

    if (isset($_POST['Proses_Update'])) {
        $kelompok       = $_POST['kelompok'] ?? '';
        $nama_lengkap   = $_POST['nama_lengkap'] ?? '';
        $nim            = $_POST['nim'] ?? '';
        $email          = $_POST['email'] ?? '';
        $nomor_kontak   = $_POST['nomor_kontak'] ?? '';
        $program_studi  = $_POST['program_studi'] ?? '';

        $stmt = $mysqli->prepare("UPDATE tbl_mahasiswa SET kelompok=?, nama_lengkap=?, nim=?, email=?, nomor_kontak=?, program_studi=? WHERE id=?");
        if ($stmt) {
            $stmt->bind_param("ssssssi", $kelompok, $nama_lengkap, $nim, $email, $nomor_kontak, $program_studi, $id);
            $stmt->execute();
            $stmt->close();
        }
        header("Location:tampil.php");
        exit;
    }

    $kelompok = $nama_lengkap = $nim = $email = $nomor_kontak = $program_studi = '';
    $stmt = $mysqli->prepare("SELECT kelompok, nama_lengkap, nim, email, nomor_kontak, program_studi FROM tbl_mahasiswa WHERE id=?");
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            $kelompok       = $row['kelompok'];
            $nama_lengkap   = $row['nama_lengkap'];
            $nim            = $row['nim'];
            $email          = $row['email'];
            $nomor_kontak   = $row['nomor_kontak'];
            $program_studi  = $row['program_studi'];
        } else {
            header("Location:tampil.php");
            exit;
        }
        $stmt->close();
    }
?>
   
<html>  
    <head>  
        <title>Dhifulloh Dhiya Ulhaq</title>
    </head>  
      
    <body>  
        <h1> Ubah Data Mahasiswa </h1>  
        <h4>Dhifulloh Dhiya Ulhaq</h5>
        <h4>1202220139</h4>
        <hr>  
          
         <form action="ubah.php" method="post">  
            <table width="100%" border="1">  
                <tr>  
                    <td>Masukkan Kelompok</td>  
                    <td>  
                        <input type="text" name="kelompok" size="100%" value="<?php echo htmlspecialchars($kelompok, ENT_QUOTES, 'UTF-8'); ?>">  
                    </td>  
                </tr>  
                  
                <tr>  
                     <td>Masukkan Nama Lengkap</td>  
                    <td>  
                        <input type="text" name="nama_lengkap" size="100%" value="<?php echo htmlspecialchars($nama_lengkap, ENT_QUOTES, 'UTF-8'); ?>">  
                    </td>  
                </tr>  
                  
                <tr>  
                    <td>Masukkan NIM</td>  
                    <td>  
                        <input type="text" name="nim" size="0%" value="<?php echo htmlspecialchars($nim, ENT_QUOTES, 'UTF-8'); ?>">  
                     </td>
                </tr>  
                  
                <tr>  
                    <td>Masukkan Nomor Kontak</td>  
                    <td>  
                        <input type="text" name="nomor_kontak" size="0%" value="<?php echo htmlspecialchars($nomor_kontak, ENT_QUOTES, 'UTF-8'); ?>">  
                    </td>  
                </tr>  
                  
                 <tr>  
                    <td>Masukkan Email</td>  
                    <td>  
                        <input type="text" name="email" size="0%" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">  
                    </td>  
                </tr>  
                  
                <tr>  
                    <td>Masukkan Program Studi</td>  
                    <td>  
                         <input type="text" name="program_studi" size="100%" value="<?php echo htmlspecialchars($program_studi, ENT_QUOTES, 'UTF-8'); ?>">  
                    </td>  
                </tr>  
                  
                <tr>  
                    <td colspan="" align="center">  
                        <input type="hidden" name="id" size="100%" value="<?php echo (int)$id; ?>">  
                        <input type="submit" name="Proses_Update" value="UbahData">  
                    </td>  
                </tr>  
             </table>  
        </form>  
    </body>  
</html>
