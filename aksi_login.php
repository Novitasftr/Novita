<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi database
include 'config.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$kata_sandi = $_POST['kata_sandi'];

// menyeleksi data tamu dengan email dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * from tb_pelanggan where email='$email' AND password='$kata_sandi'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);


if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	
}else{
	header("location:index.php");
}
?>