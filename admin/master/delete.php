<?php 
include '../config/koneksi.php';
 
$id_admin = $_GET['id_admin'];
 
$sql = "DELETE FROM tadmin where id_admin=$id_admin";
$hapus = mysqli_query($koneksi, $sql);
 
// mengalihkan halaman kembali ke index.php
if ($hapus) {
    header("location:./");
} else {
    header("location:./");
}
 
?>