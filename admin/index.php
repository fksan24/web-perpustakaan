<?php include 'header.php' ?>
<body>
    <!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
    <!-- Header -->
    <div class="w3-bar w3-color w3-center">
        <h2><b>APLIKASI PERPUSTAKAAN FK</b></h2>
    </div>
    <div class="w3-bar w3-color w3-container w3-large">
        <a href="./" class="w3-bar-item w3-button"><i class="fa fa-dashboard"></i> Dashboard</a>
        <a href="master/" class="w3-bar-item w3-button"><i class="fa fa-address-book"></i> Master</a>
        <a href="data_buku.php" class="w3-bar-item w3-button"><i class="fa fa-book"></i> Data Buku</a>
        <a href="peminjaman_buku.php" class="w3-bar-item w3-button"><i class="fa fa-exchange"></i> Transaksi
            Peminjaman Buku</a>
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
            <h2 class="w3-center">SELAMAT DATANG <?php echo $_SESSION['username']; ?>!</h2><br>
            <h3 class="w3-center">Selamat Beraktivitas!</h3>
        </div>
    </div>
<?php include 'footer.php' ?>