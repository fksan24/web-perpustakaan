<?php include '../header.php' ?>
<body>

    <!-- Header -->
    <div class="w3-bar w3-color w3-center">
        <h2><b>APLIKASI PERPUSTAKAAN FK</b></h2>
    </div>
    <div class="w3-bar w3-color w3-container w3-large">
    <a href="../" class="w3-bar-item w3-button"><i class="fa fa-dashboard"></i> Dashboard</a>
        <a href="./" class="w3-bar-item w3-button"><i class="fa fa-address-book"></i> Master Admin</a>
        <a href="./data-buku/" class="w3-bar-item w3-button"><i class="fa fa-book"></i> Data Buku</a>
        <a href="./peminjaman-buku/" class="w3-bar-item w3-button"><i class="fa fa-exchange"></i> Transaksi Peminjaman Buku</a>
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
            <h2 class="w3-center">Edit Data User</h2>
            <a href="./" class="w3-button w3-color">Kembali</a>
            <?php
            include '../config/koneksi.php';
            $id_admin = $_GET['id_admin'];
            $data = mysqli_query($koneksi, "SELECT * FROM tadmin where id_admin='$id_admin'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <form method="post" action="update.php" enctype="multipart/form-data">
                    <input type="hidden" name="id_admin" value="<?php echo $d['id_admin']; ?>">
                    <input class="w3-input" type="text" name="username" maxlength="20" required value="<?php echo $d['username']; ?>">
                    <input class="w3-input" type="text" name="password" maxlength="20" required value="<?php echo $d['password']; ?>"><br>
                    <label>Foto Profil</label>
                    <img src="gambar/<?php echo $d['foto_profil']; ?>" width="180px"><br>
                    <label>Ganti Foto Profil</label>
                    <input class="w3-input" type="file" name="foto_profil">
                    <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p><br>
                    <input class="w3-button w3-color" type="submit" value="Ubah data User">
                </form>
            <?php } ?>
        </div>
    </div>
<?php include '../footer.php' ?>