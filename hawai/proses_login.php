<?php


	//mengaktifkan session
	session_start();
	
    //memanggil koneksi database
    include 'koneksi.php';

    //mengambil data dari inputan method 'post'
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    //memasukkan ke dalam database
    $q = $koneksi->query("SELECT * FROM user
	WHERE user.username = '$username'
	AND user.password   = '$password'");

    //pengecekan berhasil
    if(mysqli_num_rows($q)> 0){
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
        header('location: hawai.php');
        exit();
	}else{
	header('location: login.php');
	exit();
    }
?>