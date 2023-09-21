<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../config/koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM tadmin WHERE username='$username' AND password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:../admin/");
}else{
	header("location:./index.php?pesan=gagal");
}
?>