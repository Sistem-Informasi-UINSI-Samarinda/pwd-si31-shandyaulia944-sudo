<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Kelola Berita</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Panel Admin Portal Berita</h1>
    </header>

    <nav>
        <a href="index.php">Lihat Website</a>
        <a href="tambah.php">Tambah Berita</a>
    </nav>

    <div class="container">
        <h2>Daftar Berita</h2>
        <table>
            <tr>
                <th>No</th> <th>Judul</th>
                <th>Aksi</th>
            </tr>
            <?php
            // Tetap menggunakan ORDER BY id_berita ASC agar data lama di atas
            $sql = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita ASC");
            
            $no = 1; // 2. Tambahkan variabel bantu mulai dari angka 1
            
            while($d = mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td> <td><?php echo $d['judul']; ?></td>
                <td>
                    <a href="hapus.php?id=<?php echo $d['id_berita']; ?>" style="color: red;" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>