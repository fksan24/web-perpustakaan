<?php

include '../config/koneksi.php';

$query = mysqli_query($koneksi, "SELECT max(kode_pinjaman) as kode_pinjamanBesar FROM tpinjaman_buku");
$data = mysqli_fetch_array($query);
$kode_pinjaman = $data['kode_pinjamanBesar'];

$urutan = (int) substr($kode_pinjaman, 3, 3);

$urutan++;

$huruf = "PBK";
$kode_pinjaman = $huruf . sprintf("%03s", $urutan);

?>