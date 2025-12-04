<html>
<head>
    <title>Aplikasi CRUD dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css"> </head>
<body>

    <div class="container"> <h1>Tambah Data Siswa</h1>
    
    <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
    <table width="100%"> 
    <tr>
        <td>NIS</td>
        <td><input type="text" name="nis"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>
            <input type="radio" name="jenis_kelamin" value="Laki-laki" id="lk"> <label for="lk">Laki-laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="pr"> <label for="pr">Perempuan</label>
        </td>
    </tr>
    <tr>
        <td>Telepon</td>
        <td><input type="text" name="telp"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><textarea name="alamat"></textarea></td>
    </tr>
    <tr>
        <td>Foto</td>
        <td><input type="file" name="foto"></td>
    </tr>
    </table>
    <br>
    <input type="submit" value="Simpan">
    <a href="index.php" class="btn-nav" style="background-color: #f44336; margin-top: 10px; display: block; text-align: center;">Batal</a>
    
    </form>
    </div> </body>
</html>