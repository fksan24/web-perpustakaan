<?php

include '../config/koneksi.php';

$query = mysqli_query($koneksi, "SELECT max(kode_buku) as kode_bukuBesar FROM tbuku");
$data = mysqli_fetch_array($query);
$kode_buku = $data['kode_bukuBesar'];

$urutan = (int) substr($kode_buku, 3, 3);

$urutan++;

$huruf = "KDB";
$kode_buku = $huruf . sprintf("%03s", $urutan);

?>