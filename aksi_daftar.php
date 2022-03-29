<?php

// menghubungkan dengan koneksi database
include 'config.php';

//menangkap data yang dikirim dari form
$kd_tamu = $_POST['kd_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$provinsi = $_POST['provinsi'];
$kota = $_POST['kota'];
$kecamatan = $_POST['kecamatan'];
$nmr_telepon = $_POST['nmr_telepon'];
$kata_sandi = $_POST['kata_sandi']

// menyiapkan data tamu ke database
$tbl_tamu = mysqli_query($koneksi,"INSERT INTO tbl_tamu(kd_tamu, nama_tamu, email, no_telepon, alamat, kata_sandi, provinsi, kota, kecamatan)
VALUES ('kd_tamu', '$nama_tamu', '$email', '$nmr_telepon', '$alamat', '$kata_sandi', '$provinsi', '$kota', '$kecamatan')"};

if ($data_tamu) {
	header("location:index.php");
	}else{
	header("location:index.php?pesan=gagal");
	}

?>
