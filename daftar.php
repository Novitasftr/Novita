
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Pendaftaran Akun Tamu</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

     <body background="bg_hotel/background.jpg">
    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
  </head>

  <?php

	// menghubungkan dengan koneksi database
	include 'config.php';
 
	// mengambil data tamu dengan kode paling besar
	$query = mysqli_query($koneksi, "SELECT max(kd_tamu) as kd_tamu FROM tbl_tamu");
	$data = mysqli_fetch_array($query);
	$kd_tamu = $data['kd_tamu'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kd_tamu, 3, 3);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "TM";
	$kd_tamu = $huruf . sprintf("%03s", $urutan);
	?>

  <body class="text-center" style="margin-left: 350px;">
  <?php 
if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "gagal"){
		echo "Data tidak tersimpan dan tidak terdaftar";
	}
}
?>
<!-- <main class="form-signin" > -->
<main class="form-daftar row g-3" >
  <form method="post" action="aksi_daftar.php" > 
    <img class="mb-4" src="image/logo.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Daftar Akun</h1>
    <div class="col">
  <input type="hidden" name="kd_tamu" required="required" value="<?php echo $kd_tamu ?>" readonly>
</div>
<div class="row" >
  
  <div class="col" >
    <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Nama Lengkap" name="nama_tamu">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Email" aria-label="Email" name="email">
  </div>
</div>

<div class="input-group">
  <span class="input-group-text">Alamat lengkap</span>
  <textarea class="form-control" aria-label="Alamat" name="alamat"></textarea>
</div>

<div class="row">
  <div class="col-sm-4">
  <div class="input-group">
      <label class="input-group-text" for="inputGroupSelect01">Provinsi</label>
  <select class="form-select" id="inputGroupSelect01" name="provinsi">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
  </div>

  <div class="col-sm-4">
  <div class="input-group">
      <label class="input-group-text" for="inputGroupSelect01">Kota</label>
  <select class="form-select" id="inputGroupSelect01" name="kota">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
  </div>

  <div class="col-sm-4">
  <div class="input-group">
      <label class="input-group-text" for="inputGroupSelect01">Kecamatan</label>
  <select class="form-select" id="inputGroupSelect01" name="kecamatan">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
  </div>
</div>

<div class="row">
  <div class="col-sm">
    <input type="text" class="form-control" placeholder="Nomor Telepon" aria-label="Nomor Handphone" name="nmr_telepon">
  </div>
  <div class="col-sm">
    <input type="password" class="form-control" placeholder="Kata Sandi" aria-label="Kata Sandi" name="kata_sandi">
  </div>
</div>

    <button class="w-50 btn btn-lg btn-primary" type="submit">Daftar </button>
    <div class="checkbox mb-3">
      <label>
        <a href="login.php">Sudah memiliki akun?Login disini!</a>
       
      </label>
    </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
  </form>
</main>


    
  </body>
</html>
