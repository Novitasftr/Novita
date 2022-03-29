<?php 
    include 'config.php';

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $kamar = $_POST['kamar'];
    $jml_kamar = $_POST['jml_kamar'];
    $jml_dewasa = $_POST['jml_dewasa'];
    $jml_anak = $_POST['jml_anak'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];

    $insert = mysqli_query($koneksi,"INSERT INTO tb_reservasi (nama_tamu,alamat_tamu,hp_tamu,id_kamar_reservasi,check_in,check_out,jml_dewasa,jml_anak,jml_kamar) VALUES ('$nama','$alamat','$hp','$kamar','$check_in','$check_out','$jml_dewasa','$jml_anak','$jml_kamar')");
    $lastid = mysqli_insert_id($koneksi);
    if ($insert) {
        header('location: success.php?id='.$lastid);
    }else{
        // header('location: index.php');
    }

?>