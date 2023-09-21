<?php  include '../header.php' ?>
<body>

    <!-- Header -->
    <div class="w3-bar w3-color w3-center">
        <h2><b>APLIKASI PERPUSTAKAAN FK</b></h2>
    </div>
    <div class="w3-bar w3-color w3-container w3-large">
        <a href="../" class="w3-bar-item w3-button"><i class="fa fa-dashboard"></i> Dashboard</a>
        <a href="../master/" class="w3-bar-item w3-button"><i class="fa fa-address-book"></i> Master Admin</a>
        <a href="./" class="w3-bar-item w3-button"><i class="fa fa-book"></i> Data Buku</a>
        <a href="../peminjaman-buku/" class="w3-bar-item w3-button"><i class="fa fa-exchange"></i> Transaksi Peminjaman Buku</a>
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
            <h2 class="w3-center">Edit Buku</h2>
            <a href="./" class="w3-button w3-color">Kembali</a>
            <?php
            include '../config/koneksi.php';
            $kode_buku = $_GET['kode_buku'];
            $data = mysqli_query($koneksi, "SELECT * FROM tbuku where kode_buku='$kode_buku'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <form method="post" action="update.php" enctype="multipart/form-data">
            <label>Kode Buku</label>
                <input class="w3-input w3-color" type="text" name="kode_buku" value="<?php echo $d['kode_buku']; ?>" maxlength="20" required readonly>
                <input class="w3-input" type="text" name="nama_buku" value="<?php echo $d['nama_buku']; ?>" maxlength="20" required><br>
                <label>Cover Buku</label><br>
                <img src="coverbuku/<?php echo $d['cover_buku']; ?>" width="180px"><br>
                <input class="w3-input" type="file" name="cover_buku" required="required" value="<?php echo $d['cover_buku']; ?>">
                <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                <input class="w3-input" type="text" name="pengarang" value="<?php echo $d['pengarang']; ?>" required><br>
                <label for="genre">Genre</label><br>
                <input class="w3-radio" type="radio" id="petualangan" name="genre" value="Petualangan">
                <label for="petualangan">Petualangan</label>
                <input class="w3-radio" type="radio" id="fantasi" name="genre" value="Fantasi">
                <label for="fantasi">Fantasi</label>
                <input class="w3-radio" type="radio" id="fiksi-ilmiah" name="genre" value="Fiksi Ilmiah">
                <label for="fiksi-ilmiah">Fiksi Ilmiah</label>
                <input class="w3-radio" type="radio" id="sejarah" name="genre" value="Sejarah">
                <label for="sejarah">Sejarah</label>
                <input class="w3-radio" type="radio" id="sastra" name="genre" value="Sastra">
                <label for="sastra">Sastra</label>
                <input class="w3-radio" type="radio" id="humor" name="genre" value="Humor">
                <label for="humor">Humor</label><br>
                <input class="w3-radio" type="radio" id="horor" name="genre" value="Horor">
                <label for="horor">Horor</label>
                <input class="w3-radio" type="radio" id="romansa" name="genre" value="Romansa">
                <label for="romansa">Romansa</label>
                <input class="w3-radio" type="radio" id="thrillers" name="genre" value="Thrillers">
                <label for="thrillers">Thrillers</label>
                <input class="w3-radio" type="radio" id="western" name="genre" value="Western">
                <label for="western">Western</label><br><br>
                <input class="w3-input" type="number" name="tahun_terbit" value="<?php echo $d['tahun_terbit']; ?>" required>
                <input class="w3-input" type="number" name="harga" value="<?php echo $d['harga']; ?>" required>
                <input class="w3-input" type="number" name="stok" value="<?php echo $d['stok']; ?>" required>
                <input class="w3-button w3-color" type="submit" value="Ubah Buku">
            </form>
            <?php } ?>
        </div>
    </div>

<?php include '../footer.php' ?>