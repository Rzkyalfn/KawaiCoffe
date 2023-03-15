<?php
    //memanggil koneksi database
    include 'koneksi.php';

    //mengambil data dari inputan method 'post'
    $id_pelanggan = $_POST['id_pelanggan'];
	$nama_pelanggan = $_POST['nama_pelanggan'];
    $no_hp = $_POST['no_hp'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];

    //memasukkan ke dalam database
    $q = $koneksi->query("UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', no_hp= '$no_hp', pekerjaan= '$pekerjaan',
	alamat = '$alamat'
	WHERE id_pelanggan = $id_pelanggan");

    //pengecekan berhasil
    if($q){
        header('location: list_pelanggan.php');
        exit();
	}
?>