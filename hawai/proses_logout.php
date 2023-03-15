<?php

	session_start();
	
	session_destroy();
	
	//pengecekan berhasil
		header('location: login.php');
		exit ();
	
?>