<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portal Berita Kampus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Selamat Datang di Portal Berita Kampus</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="admin.php">Admin Panel</a>
    </nav>

    <div class="container">
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC");
        while($data = mysqli_fetch_array($query)) {
        ?>
            <div class="berita-item">
                <h2><?php echo $data['judul']; ?></h2>
                <p class="tanggal">Tanggal: <?php echo $data['tanggal']; ?></p>
                <p><?php echo $data['isi_berita']; ?></p>
            </div>
        <?php } ?>
    </div>
</body>
</html>