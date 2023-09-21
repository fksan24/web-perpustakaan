<?php include '../config/koneksi.php' ?>
<?php include '../header.php' ?>

<body>

    <!-- Header -->
    <div class="w3-bar w3-color w3-center">
        <h2><b>APLIKASI PERPUSTAKAAN FK</b></h2>
    </div>
    <div class="w3-bar w3-color w3-container w3-large">
        <a href="../" class="w3-bar-item w3-button"><i class="fa fa-dashboard"></i> Dashboard</a>
        <a href="./" class="w3-bar-item w3-button"><i class="fa fa-address-book"></i> Master Admin</a>
        <a href="../data-buku/" class="w3-bar-item w3-button"><i class="fa fa-book"></i> Data Buku</a>
        <a href="../peminjaman-buku/" class="w3-bar-item w3-button"><i class="fa fa-exchange"></i> Transaksi Peminjaman Buku</a>
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
    <?php
    if (isset($_GET['alert'])) {
        if ($_GET['alert'] == 'gagal_ekstensi') {
    ?>
            <script language="JavaScript">
                alert('Peringatan! Ekstensi gambar salah');
                document.location = 'tambah-admin.php';
            </script>
        <?php
        } elseif ($_GET['alert'] == "gagal_ukuran") {
        ?>
            <script language="JavaScript">
                alert('Peringatan! Ukuran file gambar terlalu besar');
                document.location = 'tambah-admin.php';
            </script>
        <?php
        } elseif ($_GET['alert'] == "berhasil") {
        ?>
            <script language="JavaScript">
                alert('Sukses! Telah menambah Admin baru');
                document.location = 'index.php';
            </script>
    <?php
        }
    }
    ?>
    <!-- Index -->
    <div class="w3-content">
        <div class="w3-container">
            <h2 class="w3-center">Data User</h2>
            <a href="tambah-admin.php" class="w3-button w3-color">Tambah User Baru</a>
            <table class="w3-table-all">
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Foto Profil</th>
                    <th>Opsi</th>
                </tr>
                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM tadmin");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['username']; ?></td>
                        <td><?php echo $d['password']; ?></td>
                        <td><img src="gambar/<?php echo $d['foto_profil']; ?>" width="180px"></td>
                        <td>
                            <a href="edit-admin.php?id_admin=<?php echo $d['id_admin']; ?>" class="w3-button w3-color">Edit</a>
                            <a href="delete.php?id_admin=<?php echo $d['id_admin']; ?>" onclick="konfirmasi()" class="w3-button w3-color">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
<script>function konfirmasi() {
    konfirmasi = confirm("Apakah anda yakin ingin menghapus akun admin ini?")
    document.writeln(konfirmasi)
}</script>
<?php include '../footer.php' ?>