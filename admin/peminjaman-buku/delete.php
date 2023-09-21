<?php 
include '../config/koneksi.php';
 
$kode_pinjaman = $_GET['kode_pinjaman'];
 
$sql = "DELETE FROM tpinjaman_buku WHERE kode_pinjaman=$kode_pinjaman";
$hapus = mysqli_query($koneksi, $sql);
 
// mengalihkan halaman kembali ke index.php
if ($hapus) {
    header("location:./");
} else {
    header("location:./");
}
 
?>