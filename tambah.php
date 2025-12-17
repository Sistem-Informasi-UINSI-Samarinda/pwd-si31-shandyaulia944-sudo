<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Berita</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Buat Berita Baru</h1>
    </header>

    <div class="container">
        <form method="POST" action="">
            <label>Judul Berita</label>
            <input type="text" name="judul" required>
            
            <label>Isi Berita</label>
            <textarea name="isi_berita" rows="8" required></textarea>
            
            <button type="submit" name="simpan">Simpan Berita</button>
            <a href="admin.php" style="margin-left: 10px;">Batal</a>
        </form>

        <?php
        if(isset($_POST['simpan'])){
            $judul = $_POST['judul'];
            $isi = $_POST['isi_berita'];
            $tgl = date('Y-m-d');
            $query = mysqli_query($koneksi, "INSERT INTO berita VALUES('', '$judul', '$isi', '$tgl')");
            if($query) echo "<script>alert('Berhasil!'); window.location='index.php';</script>";
        }
        ?>
    </div>
</body>
</html>