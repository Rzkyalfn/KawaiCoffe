


<?php

$koneksi = mysqli_connect('localhost','root','','hawai');

//pengecekan koneksi database
if(mysqli_connect_errno()){
	echo "koneksi database gagal : " . mysqli_connect_error();
}

?>

<!--cek apakah sudah login -->
<?php
session_start();

if(!$_SESSION['username']){
	header('location: login.php');
	exit();
}
?>


<!DOCTYPE html>
<!--
	Resto by GetTemplates.co
	URL: https://gettemplates.co
	
-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>hawai</title>
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">
	<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
			Kuncen WB1, Wirobrajan 10010, DIY
		</p>
		<p>
			<span class="fs-16 primary-color">(+68) 120034509</span>
		</p>
		<p>info@yourdomain.com</p>
	</div>
</div>	<div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		<form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<i class="fas fa-search text-grey" aria-hidden="true"></i>
			    </button>
			  </div>
			</div>

		</form>
	</div>
	
 	
</div>	
    <div id="canvas-overlay"></div>
	<div class="boxed-page">
		<nav id="navbar-header" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
            <img src="img/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between">
			
			
			
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="menu_list.php" id="navbarDropdown" 
						role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="lnr lnr-menu"></span>
                    </a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="proses_logout.php">Logout</a>
                          
                        </div>
                </li>

					




            <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="hawai.php">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="list_pelanggan.php">Pelanggan</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="riwayat_list.php">Riwayat</a>
                    </li>

                </div>

            </ul>
            <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="#">
                <img width="1000%" height="" src="img/hawai1.jpg" alt="">
            </a>

            <ul class="navbar-nav d-flex justify-content-between">
                <div class="d-flex flex-lg-row flex-column">
                    
                    <li class="nav-item ">
                        <a class="nav-link" href="komentar_saran_list.php">Saran / Komentar </a>
                    </li>

                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="menu_list.php" id="navbarDropdown" 
						role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Jenis Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="menu_list.php">Dessert</a>
                          <a class="dropdown-item" href="menu_list.php">Halal FOOD</a>
                          <a class="dropdown-item" href="menu_list.php">Non Halal FOOD</a>
                          <a class="dropdown-item" href="menu_list.php">Moktail</a>
                          <a class="dropdown-item" href="menu_list.php">Snack</a>
                        </div>
                    </li>
                </div>
				
                <li class="nav-item">
                    <a id="side-search-open" class="nav-link" href="#">
                        <span class="lnr lnr-magnifier"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>	
<hr>
<div class="hero">
  <div class="container">
	<div class="row d-flex align-items-center">
		<div class="col-lg-6 hero-left">
		    <h1 class="display-4 mb-5">We Love <br>Hawai Foods !</h1>
		  
                        <a class="btn btn-primary" href=""></i></a>
						<br>
						<br>
						 <a class="btn btn-primary" href="tambah_pelanggan_form.php"></i>Click To Reservation</a>
						 <a class="btn btn-icon btn-lg" href="https://www.youtube.com/watch?v=Keug3IAb5zo">
			    	<span class="lnr lnr-film-play"></span>
			    	Play Video 
			    </a>
                    </li>
		   
		    <ul class="hero-info list-unstyled d-flex text-center mb-0">
		    	<li class="border-right">
		    		<span class="lnr lnr-rocket"></span>
		    		<h5>
		    			Fast Delivery
		    		</h5>
		    	</li>
		    	<li class="border-right">
		    		<span class="lnr lnr-leaf"></span>
		    		<h5>
		    			Fresh Food
		    		</h5>
		    	</li>
		    	<li class="">
		    		<span class="lnr lnr-bubble"></span>
		    		<h5>
		    			24/7 Support 
		    		</h5>
		    	</li>
		    </ul>

	    </div>
	    <div class="col-lg-6 hero-right">
	    	<div class="owl-carousel owl-theme hero-carousel">
			   <div class="item">
			    	<img class="img-fluid" src="img/resto1.jpg" alt="">
			    </div>
			    <div class="item">
			    	<img class="img-fluid" src="img/hawai6.jpg" alt="">
			    </div>
			    <div class="item">
			    	<img class="img-fluid" src="img/hawai3.jpg" alt="">
			    </div>
			    <div class="item">
			    	<img class="img-fluid" src="img/resto3.jpg" alt="">
			    </div>
			</div>
	    </div>
	</div>
  </div>
</div>		
<!-- Welcome Section -->

<section id="gtco-welcome" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2" style="background-image: url(img/hawai2.jpg);">
                    
                </div>
                <div class="col-sm-7 py-5 pl-md-0 pl-4">
                    <div class="heading-section pl-lg-5 ml-md-5">
                        
                        <h2>
                            Welcome to Resto Hawai !
                        </h2>
                    </div>
                    <div class="pl-lg-5 ml-md-5">
                        <p> Welcome to the hawaiian restaurant, we sell a wide variety of food and beverages worldwide, please try, enjoy !</p>
                        <h3 class="mt-5">Best Menu Hawai </h3>
                        <div class="row">
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="img/waffle.jpg" />
                                    <h6>Waffle Choco Ribe</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="img/Strawberry.jpg" />
                                    <h6>Strawbery Mozito</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="img/porkbery.jpg"/>
                                    <h6>Pork Belly Satay Sandwich</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Welcome Section -->		<!-- Special Dishes Section -->
<section id="gtco-special-dishes" class="bg-grey section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Specialties
                </span>
                <h2>
                    Special Dishes
                </h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">01.</h2>
                    <div class="dishes-text">
                        <h3><span>Mie Goreng</span><br>Hawai Beach</h3>
                        <p class="pt-3">Noodles are a staple food substitute for rice made from flour dough in the form of flats and cut lengthwise or curly, then dried and cooked in boiling water.</p>
                        <h3 class="special-dishes-price">Rp. 30.000</h3>
                        <a class="btn btn-primary" href="menu_list.php"><i class="fas fa-search mr-2"></i>Explore Menu</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="img/mie.jpg" alt="" class="img-fluid shadow w-100">
					
					
					
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="img/nasi.jpg" alt="" class="img-fluid shadow w-100">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                    <h2 class="special-number">02.</h2>
                    <div class="dishes-text">
                        <h3><span>Nasi Goreng</span><br>Hawai Beach</h3>
                        <p class="pt-3">Fried rice is a dish of rice that is fried in a frying pan or frying pan to produce a different taste because it is mixed with spices such as salt, garlic, shallots, pepper and sweet soy sauce.</p>
                        <h3 class="special-dishes-price">Rp. 35.000</h3>
                        <a class="btn btn-primary" href="menu_list.php"><i class="fas fa-search mr-2"></i>Explore Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Special Dishes Section -->		
<!-- Menu Section -->
<section id="gtco-menu" class="section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Specialties
                        </span>
                        <h2>
                            Our Menu Hawai 
                        </h2>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Deseret & Snack</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/choco.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Chocolate Caramel</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">25 K</h4>
                                </div>
                            </div>
                            <p>Deseret</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/waffle.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Waffle Choco Ribe</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">17 K</h4>
                                </div>
                            </div>
                            <p>Deseret</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/crispy.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Crispy Pokpok</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">20 K</h4>
                                </div>
                            </div>
                            <p>Snack</p>
                        </div>
                    </div>
					
					<div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/nachos.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Nachos Cheese</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">25 K</h4>
                                </div>
                            </div>
                            <p>Snack</p>
                        </div>
						
                    </div>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Halal & Non Halal Food </h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/nasi.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Nasi Goreng Hawai Beach</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">35 K</h4>
                                </div>
                            </div>
                            <p>Halal</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/mie.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Mie Goreng Hawai Beach</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">30 K</h4>
                                </div>
                            </div>
                            <p>Halal</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/babitaliwang.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Babi Taliwang</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">50 K</h4>
                                </div>
                            </div>
                            <p>Non Halal</p>
                        </div>
                    </div>
					 <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/pork.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Pork Belly SS</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">50 K</h4>
                                </div>
                            </div>
                            <p>Non Halal</p>
                        </div>
                    </div>
					
					
					
					
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Moktail & Cocktail</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/lemon.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Lemon Squash Hawai</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">20 K</h4>
                                </div>
                            </div>
                            <p>Moktail</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/bery.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Strawbery Mozito</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">30 K</h4>
                                </div>
                            </div>
                            <p>Moktail</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/peach.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Hawai Peach</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">35 K</h4>
                                </div>
                            </div>
                            <p>Cocktail</p>
                        </div>
                    </div>
					 <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/berycold.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Berrycold</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">30 K</h4>
                                </div>
                            </div>
                            <p>Cocktail</p>
                        </div>
                    </div>
					
					
					
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of menu Section -->		

<!-- Testimonial Section-->
<section id="gtco-testimonial" class="overlay bg-fixed section-padding" style="background-image: url(img/testi-bg.jpg);">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Testimony
                </span>
                <h2>
                    Happy Customer
                </h2>
            </div>
            <div class="row">
                <!-- Testimonial -->
                <div class="testi-content testi-carousel owl-carousel">
                    <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">"Enak Banget Sumpah Sampai Mau Meninggal"</p>
                        <p class="testi-author">Alfi, Rama, Emma</p>
                        <p class="testi-desc">Dari<span>Kelompok 5</span></p>
                    </div>
                    <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">"Gak Ngerti Lagi Rasanya Enak Banget"</p>
                        <p class="testi-author">Alfi, Rama, Emma</p>
                        <p class="testi-desc">Dari<span>Kelompok 5</span></p>
                    </div>
                </div>
                <!-- End of Testimonial -->
            </div>
        </div>
    </div>
</section>
<!-- End of Testimonial Section-->		


<!-- Team Section -->
<section id="gtco-team" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Specialties
                </span>
                <h2>
                    Our Team
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="img/rama1.jfif" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">M. Ramadhan Noor</h4>
                            <p class="mb-1">CEO</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/ramadhannoor_/">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="img/alfi.jpg" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">M. Rizky Alfian</h4>
                            <p class="mb-1">Chef</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=" https://twitter.com/WargaDirindukan?t=BBKqBXYBVaCZpBfVHBTpqQ&s=08">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/rizky.alfian_/">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/tehkalengg/">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="img/emma1.jpg" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">Emma Ridhawati</h4>
                            <p class="mb-1">Chef</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/emmaridawati/">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Team Section -->		

<hr>
<footer class="mastfoot pb-5 bg-white section-padding pb-0">
    <div class="inner container">
         <div class="row">
         	
			
			
			
         	<div class="col-lg-12">
         		<div class="footer-widget px-lg-6 px-0">
         			<h4>Open Hours</h4>
	         		<ul class="list-unstyled open-hours">
		                <li class="d-flex justify-content-between"><span>Monday</span><span>9:00 - 24:00</span></li>
		                <li class="d-flex justify-content-between"><span>Tuesday</span><span>9:00 - 24:00</span></li>
		                <li class="d-flex justify-content-between"><span>Wednesday</span><span>9:00 - 24:00</span></li>
		                <li class="d-flex justify-content-between"><span>Thursday</span><span>9:00 - 24:00</span></li>
		                <li class="d-flex justify-content-between"><span>Friday</span><span>9:00 - 02:00</span></li>
		                <li class="d-flex justify-content-between"><span>Saturday</span><span>9:00 - 02:00</span></li>
		                <li class="d-flex justify-content-between"><span>Sunday</span><span> Closed</span></li>
		              </ul>
         		</div>
         		
         	</div>
			
			<div class="col-md-12 d-flex align-items-center">
            <p class="mx-auto text-center mb-0">Copyright 2022. All Right Reserved. Design by kelompok 5 </a></p>
            </div>
        
            
        </div>
    </div>
</footer>	</div>
</div>
	<!-- External JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Main JS -->
	<script src="js/app.min.js "></script>
</body>
</html>
