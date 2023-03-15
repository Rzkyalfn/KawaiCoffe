<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hawai | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<br>
<br>
<br>
<br>
<br>
<body class="img js-fullheight" style="background-image: url(images/bg8.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="login-logo">
    <a href=""style="color: black"><b>HAWAI</b> FOOD </a><br> 
	
	<a class="center" href="#" >
                <img width="25%"height="%" align="center" src="img/hawai00.png" alt="">
            </a>
  </div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-3">
					<div class="login-wrap p-0">
					<br>
					<br>
		      	<h3 class="mb-3 text-center">Login Untuk Memulai Aplikasi Hawai !</h3>
				
		      	<form action="proses_login.php" method="post" class="signin-form">
		      		<div class="input-group mb-2">
          <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user m-1"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-2">
          <input id="password-field" type="password" name ="password" class="form-control" placeholder="Masukkan Password">
		  
          <div class="input-group-append">
            <div class="input-group-text">
			<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password "></span>
			
              
            </div>
          </div>
        </div>
		<br>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary ">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="lupa_ya.php" style="color: black"> Lupa Ya ? </a>
								</div>
	            </div>
	          </form>
	          
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

