<?php include '../config/koneksi.php'; ?>
<?php include 'kode-pinjaman.php'; ?>
<?php include '../header.php' ?>
<body>

    <!-- Header -->
    <div class="w3-bar w3-color w3-center">
        <h2><b>APLIKASI PERPUSTAKAAN FK</b></h2>
    </div>
    <div class="w3-bar w3-color w3-container w3-large">
        <a href="../" class="w3-bar-item w3-button"><i class="fa fa-dashboard"></i> Dashboard</a>
        <a href="../master/" class="w3-bar-item w3-button"><i class="fa fa-address-book"></i> Master Admin</a>
        <a href="../data-buku/" class="w3-bar-item w3-button"><i class="fa fa-book"></i> Data Buku</a>
        <a href="./" class="w3-bar-item w3-button"><i class="fa fa-exchange"></i> Transaksi Peminjaman Buku</a>
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
            <h2 class="w3-center">Tambah Data Peminjaman Buku</h2>
            <a href="./" class="w3-button w3-color">Kembali</a>
            <form method="post" action="create.php">
                <input class="w3-input w3-color" type="text" name="kode_pinjaman" value="<?php echo $kode_pinjaman ?>" maxlength="20" required readonly>
                <select id="kode_buku" name="kode_buku" class="w3-input w3-border">
                    <option value="">Pilih Buku:</option>
                    <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM tbuku");
                    while ($d = mysqli_fetch_array($data)) {
                        echo '<option value="' . $d['kode_buku'] . '">
                        ' . $d['kode_buku'] . ' - ' . $d['nama_buku'] . '</option>';
                    }
                    ?>
                    <input class="w3-input" type="date" name="tgl_pinjaman" placeholder="Tanggal Peminjaman" required>
                    <input class="w3-input" type="text" name="nama" placeholder="Nama Peminjam" required>
                    <input class="w3-input" type="text" name="alamat" placeholder="Alamat" required>
                    <input class="w3-input" type="text" name="nomor_hp" placeholder="Nomor HP" required>
                    <div class="hitung-pinjaman">
                        <input class="w3-input" type="number" id="harga_pinjam" name="harga_pinjam" placeholder="Harga Pinjam" required>
                        <input class="w3-input" type="number" id="lama_pinjaman" name="lama_pinjaman" placeholder="Lama Peminjaman" required>
                        <input class="w3-input w3-color" type="number" id="total_pinjaman" name="total_pinjaman" placeholder="Total Peminjaman" required readonly>
                    </div>
                    <input type="hidden" value="Belum Selesai" name="status">
                    <input class="w3-button w3-color" type="submit" value="Tambah Peminjaman Buku">
            </form>
        </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="hitung-pinjaman.js"></script>
<?php include '../footer.php' ?>