<?php
// Koneksi database
include '../config/koneksi.php';

// Menangkap data yang di kirim dari form
$kode_pinjaman = $_POST['kode_pinjaman'];
$kode_buku = $_POST['kode_buku'];
$tgl_pinjaman = $_POST['tgl_pinjaman'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nomor_hp = $_POST['nomor_hp'];
$harga_pinjam = $_POST['harga_pinjam'];
$lama_pinjaman = $_POST['lama_pinjaman'];
$total_pinjaman = $_POST['total_pinjaman'];
$status = $_POST['status'];


mysqli_query($koneksi, "UPDATE tpinjaman_buku SET kode_buku='$kode_buku', tgl_pinjaman='$tgl_pinjaman', nama='$nama', alamat='$alamat', nomor_hp='$nomor_hp', harga_pinjam='$harga_pinjam', lama_pinjaman='$lama_pinjaman', total_pinjaman='$total_pinjaman', status='$status' WHERE kode_pinjaman='$kode_pinjaman'");

header("location:./");

?>