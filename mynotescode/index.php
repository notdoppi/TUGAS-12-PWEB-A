<html>
<head>
    <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css"> </head>
<body>

    <div class="container"> <h1>Data Siswa</h1>
    <a href="form_simpan.php" class="btn-nav">Tambah Data</a><br><br>
    
    <table border="1" width="100%">
    <tr>
        <th>Foto</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
    </tr>
    <?php
    // Load file koneksi.php
    include "koneksi.php";

    // Buat query untuk menampilkan semua data siswa
    $sql = $pdo->prepare("SELECT * FROM siswa");
    $sql->execute(); // Eksekusi querynya

    while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
        echo "<tr>";
        // CSS sudah mengatur ukuran gambar agar tidak merusak tabel
        echo "<td><img src='images/".$data['foto']."' alt='Foto Siswa'></td>"; 
        echo "<td>".$data['nis']."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['jenis_kelamin']."</td>";
        echo "<td>".$data['telp']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
        echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
        echo "</tr>";
    }
    ?>
    </table>
    </div> </body>
</html>