<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id'];

// Query untuk menampilkan data siswa berdasarkan ID yang dikirim
$sql = $pdo->prepare("SELECT foto FROM siswa WHERE id=:id");
$sql->bindParam(':id', $id);
$sql->execute(); // Eksekusi query insert
$data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql

// Cek apakah file fotonya ada di folder images
if(is_file("images/".$data['foto']))
    unlink("images/".$data['foto']); // Hapus foto yang telah diupload dari folder images

// Query untuk menghapus data siswa berdasarkan ID yang dikirim
$sql = $pdo->prepare("DELETE FROM siswa WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query

// Cek jika proses simpan ke database sukses atau tidak
if($execute){ 
    // Jika Sukses, Lakukan:
    header("Location: index.php"); // Redirect ke halaman index.php
}else{
    // Jika Gagal, Lakukan:
    echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}

?>