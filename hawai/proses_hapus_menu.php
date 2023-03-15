<?php
    //memanggil koneksi database
    include 'koneksi.php';

    //mengambil data dari  method 'GET'
    $id_menu = $_GET['id_menu'];


    //memasukkan ke dalam database
    $q = $koneksi->query("DELETE FROM menu WHERE id_menu= $id_menu");

    //pengecekan berhasil
    if($q){
        header('location: menu.php');
        exit();
    }
?>