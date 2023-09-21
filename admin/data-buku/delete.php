<?php 
include '../config/koneksi.php';
 
$kode_buku = $_GET['kode_buku'];
 
$sql = "DELETE FROM tbuku where kode_buku=$kode_buku";
$hapus = mysqli_query($koneksi, $sql);
 
// mengalihkan halaman kembali ke index.php
if ($hapus) {
    header("location:./");
} else {
    header("location:./");
}
 
?>