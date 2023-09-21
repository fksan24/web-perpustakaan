<?php include '../config/koneksi.php'; ?>
<?php include 'kode-pinjaman.php'; ?>
<?php include '../header.php' ?>
<body>

    <!-- Header -->
    <div class="w3-bar w3-color w3-center">
        <h2><b>APLIKASI PERPUSTAKAAN FK</b></h2>
    </div>
    <div class="w3-bar w3-color w3-container w3-large">
        <a href="dashboard.php" class="w3-bar-item w3-button"><i class="fa fa-dashboard"></i> Dashboard</a>
        <a href="master_admin.php" class="w3-bar-item w3-button"><i class="fa fa-address-book"></i> Master Admin</a>
        <a href="data_buku.php" class="w3-bar-item w3-button"><i class="fa fa-book"></i> Data Buku</a>
        <a href="peminjaman_buku.php" class="w3-bar-item w3-button"><i class="fa fa-exchange"></i> Transaksi Peminjaman Buku</a>
        <span onclick="document.getElementById('id00').style.display='block'" class="w3-bar-item w3-button w3-right"><i class="fa fa-sign-out"></i> Log-out</span>
        <div id="id00" class="w3-modal">
            <div class="w3-modal-content w3-card-4">
                <header class="w3-container w3-color">
                    <h2>Peringatan!</h2>
                </header>
                <div class="w3-container">
                    <p>Apakah Anda Ingin Keluar Halaman Dashboard?</p>
                    <a href="../action/logout.php" class="w3-button w3-color">Yes!</a>
                    <span onclick="document.getElementById('id00').style.display='none'" class="w3-button w3-color">No!</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Index -->
    <div class="w3-content">
        <div class="w3-container">
            <h2 class="w3-center">Nota Peminjaman Buku</h2>
            <a href="./" class="w3-button w3-color">Kembali</a>
            <?php
            $kode_pinjaman = $_GET['kode_pinjaman'];
            $data = mysqli_query($koneksi, "SELECT * FROM tpinjaman_buku where kode_pinjaman='$kode_pinjaman'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <form method="post" action="update.php">
                <label>Kode Pinjaman</label>
                <input class="w3-input w3-color" type="text" name="kode_pinjaman" value="<?php echo $d['kode_pinjaman']; ?>" maxlength="20" required readonly>
                <label>Kode Buku</label>
                <input class="w3-input w3-color" type="text" name="kode_buku" value="<?php echo $d['kode_buku']; ?>" maxlength="20" required readonly>
                <label>Tanggal Pinjaman</label>
                <input class="w3-input w3-color" type="date" name="tgl_pinjaman" value="<?php echo $d['tgl_pinjaman']; ?>" required readonly>
                <label>Nama Peminjam</label>
                <input class="w3-input w3-color" type="text" name="nama" value="<?php echo $d['nama']; ?>" required readonly>
                <label>Alamat</label>
                <input class="w3-input w3-color" type="text" name="alamat" value="<?php echo $d['alamat']; ?>" required readonly>
                <label>Nomor HP</label>
                <input class="w3-input w3-color" type="text" name="nomor_hp" value="<?php echo $d['nomor_hp']; ?>" required readonly>
                <div class="hitung-pinjaman">
                    <label>Harga Pinjaman</label>
                    <input class="w3-input" type="number" id="harga_pinjam" name="harga_pinjam" value="<?php echo $d['harga_pinjam']; ?>" required>
                    <label>Lama Pinjaman</label>
                    <input class="w3-input" type="number" id="lama_pinjaman" name="lama_pinjaman" value="<?php echo $d['lama_pinjaman']; ?>" required>
                    <label>Total Pinjaman</label>
                    <input class="w3-input w3-color" type="number" id="total_pinjaman" name="total_pinjaman" value="<?php echo $d['total_pinjaman']; ?>" required readonly>
                </div>
                <label>Status Peminjaman</label>
                <input class="w3-input w3-color" type="text" value="Selesai" name="status" readonly>
                <input class="w3-button w3-color" type="submit" value="Proses Selesai">
            </form>
            <?php } ?>
        </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="hitung-pinjaman.js"></script>
<?php include '../footer.php' ?>