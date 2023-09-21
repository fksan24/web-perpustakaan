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
        <span onclick="document.getElementById('id00').style.display='block'" class="w3-bar-item w3-button w3-right"><i
                class="fa fa-sign-out"></i> Log-out</span>
        <div id="id00" class="w3-modal">
            <div class="w3-modal-content w3-card-4">
                <header class="w3-container w3-color">
                    <h2>Peringatan!</h2>
                </header>
                <div class="w3-container">
                    <p>Apakah Anda Ingin Keluar Halaman Dashboard?</p>
                    <a href="../action/logout.php" class="w3-button w3-color">Yes!</a>
                    <span onclick="document.getElementById('id00').style.display='none'"
                        class="w3-button w3-color">No!</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Index -->
    <div class="w3-content">
        <div class="w3-container">
            <h2 class="w3-center">Data Peminjaman Buku</h2>
            <a href="tambah-peminjaman-buku.php" class="w3-button w3-color">Tambah Peminjaman Buku Baru</a>
            <table class="w3-table-all">
                <tr>
                    <th>No.</th>
                    <th>Kode Pinjaman</th>
                    <th>Kode / Nama Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor HP</th>
                    <th>Harga Pinjam</th>
                    <th>Lama Pinjaman</th>
                    <th>Total Pinjaman</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM tpinjaman_buku");
                $datas = mysqli_query($koneksi, "SELECT * FROM tbuku");
                while ($da = mysqli_fetch_array($datas))
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['kode_pinjaman']; ?></td>
                    <td><?php echo $d['kode_buku']?> - <?php echo $da['nama_buku']?></</td>
                    <td><?php echo $d['tgl_pinjaman']; ?></td>
                    <td><?php echo $d['nama']; ?></</td>
                    <td><?php echo $d['alamat']; ?></</td>
                    <td><?php echo $d['nomor_hp']; ?></</td>
                    <td><?php echo $d['harga_pinjam']; ?></</td>
                    <td><?php echo $d['lama_pinjaman']; ?></</td>
                    <td><?php echo $d['total_pinjaman']; ?></</td>
                    <td><?php echo $d['status']; ?></</td>
                    <td>
                        <a href="selesai-peminjaman-buku.php?kode_pinjaman=<?php echo $d['kode_pinjaman']; ?>" class="w3-button w3-color">Selesai</a>
                        <a href="delete.php?kode_pinjaman=<?php echo $d['kode_pinjaman']; ?>" onclick="konfirmasi()" class="w3-button w3-color">Hapus</a>
                        <a href="print.php?kode_pinjaman=<?php echo $d['kode_pinjaman']; ?>" class="w3-button w3-color">Cetak</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <script>
        function konfirmasi() {
            konfirmasi = confirm("Apakah anda yakin ingin menghapus peminjaman buku ini?")
            document.writeln(konfirmasi)
        }
    </script>
<?php include '../footer.php' ?>