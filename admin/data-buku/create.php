<?php
//koneksi database
include '../config/koneksi.php';

//menangkap data yang dikirim dari form
$kode_buku = $_POST['kode_buku'];
$nama_buku = $_POST['nama_buku'];

$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$cover_buku = $_FILES['cover_buku']['name'];
$x = explode('.', $cover_buku);
$ext = strtolower(end($x));
$file_tmp = $_FILES['cover_buku']['tmp_name'];

$pengarang = $_POST['pengarang'];
$genre = $_POST['genre'];
$tahun_terbit = $_POST['tahun_terbit'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

if (!empty($cover_buku)) {
	if (in_array($ext, $ekstensi) === true) {

		move_uploaded_file($file_tmp, 'coverbuku/' . $cover_buku);
		mysqli_query($koneksi, "INSERT INTO tbuku VALUES('$kode_buku','$nama_buku','$cover_buku','$pengarang','$genre','$tahun_terbit','$harga','$stok')");
		header("location:./?alert=berhasil");
	} else {
		header("location:./?alert=gagal_ukuran");
	}
}

?>