<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM berita WHERE id_berita = '$id'");
    
    if($query){
        echo "<script>alert('Berita berhasil dihapus!'); window.location='admin.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus!'); window.location='admin.php';</script>";
    }
}
?>