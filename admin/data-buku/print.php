<?php include '../config/koneksi.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aplikasi Perpustakaan">
    <meta name="keywords" content="CSS, Javascript, PHP">
    <meta name="authors" content="F.K Design">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title>Cetak Data Buku</title>
</head>

<body>

    <!-- Header -->
    <h1 align="center">PERPUSTAKAAN UMUM FK</h1>
    <p align="center">(Bukunya para Wibu)</p>
    
    <!-- Index -->
    <?php
    $kode_buku = $_GET['kode_buku'];
    $data = mysqli_query($koneksi, "SELECT * FROM tbuku where kode_buku='$kode_buku'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <!-- Konten Halaman -->
        <h2>Data Buku Perpustakaan</h2>
        <table border="1px" align="center" style="width:500px;">
            <tr>
                <th align="left">Kode Buku :</th>
                <td><?php echo $d['kode_buku']; ?></td>
            </tr>
            <tr>
                <th align="left">Nama Buku :</th>
                <td><?= $d['nama_buku'] ?></td>
            </tr>
            <tr>
                <th align="left">Cover Buku :</th>
                <td><img src="coverbuku/<?php echo $d['cover_buku']; ?>" width="280px"></td>
            </tr>
            <tr>
                <th align="left">Pengarang :</th>
                <td><?php echo $d['pengarang']; ?></td>
            </tr>
            <tr>
                <th align="left">Genre :</th>
                <td><?php echo $d['genre']; ?></td>
            </tr>
            <tr>
                <th align="left">Tahun Terbit :</th>
                <td><?php echo $d['tahun_terbit']; ?></td>
            </tr>
            <tr>
                <th align="left">Harga :</th>
                <td><?php echo $d['harga']; ?></td>
            </tr>
            <tr>
                <th align="left">Stok :</th>
                <td><?php echo $d['stok']; ?></td>
            </tr>
        <?php
    }
        ?>
        </table>
        <h2 align="center">----------------------------------------------------------------------------------------</h2>
        <script>
            window.print();
        </script>
</body>

</html>