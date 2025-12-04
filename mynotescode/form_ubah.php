<html>
<head>
    <title>Aplikasi CRUD dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css"> </head>
<body>

    <div class="container"> <h1>Ubah Data Siswa</h1>

    <?php
    // Load file koneksi.php
    include "koneksi.php";

    // Ambil data NIS yang dikirim oleh index.php melalui URL
    $id = $_GET['id'];

    // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
    $sql = $pdo->prepare("SELECT * FROM siswa WHERE id=:id");
    $sql->bindParam(':id', $id);
    $sql->execute(); // Eksekusi query insert
    $data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql
    ?>

    <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
    <table width="100%">
    <tr>
        <td>NIS</td>
        <td><input type="text" name="nis" value="<?php echo $data['nis']; ?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td> <?php
        $lk_checked = ($data['jenis_kelamin'] == "Laki-laki") ? "checked" : "";
        $pr_checked = ($data['jenis_kelamin'] == "Perempuan") ? "checked" : "";
        
        echo "<input type='radio' name='jenis_kelamin' value='Laki-laki' id='lk_u' $lk_checked> <label for='lk_u'>Laki-laki</label>";
        echo "<input type='radio' name='jenis_kelamin' value='Perempuan' id='pr_u' $pr_checked> <label for='pr_u'>Perempuan</label>";
        ?>
        </td> </tr>
    <tr>
        <td>Telepon</td>
        <td><input type="text" name="telp" value="<?php echo $data['telp']; ?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
    </tr>
    <tr>
        <td>Foto</td>
        <td>
            <input type="file" name="foto">
            <small>Kosongkan jika tidak ingin mengubah foto. Foto saat ini: **<?php echo $data['foto']; ?>**</small>
        </td>
    </tr>
    </table>
    
    <br>
    <input type="submit" value="Ubah">
    <a href="index.php" class="btn-nav" style="background-color: #f44336; margin-top: 10px; display: block; text-align: center;">Batal</a>
    
    </form>
    </div> </body>
</html>