

<?php 
	session_start();
	if (isset($_SESSION['pengguna'])) {
    header("<location: index.php");}
	include_once 'koneksi.php';
?>
<!DOCTYPE html>



<html>
	<head>
		<title>Halaman Login</title>
		<link href="img/favicon.ico" rel="icon" />
		<link rel="stylesheet" type="text/css" href="assets/css/stylogin.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

		<!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
	</head>

	<body>
		
		<!-- page login -->
		<div class="page-login">

			

				<!-- box body -->
				<div class="box-body">

					<?php
						if(isset($_GET['msg'])){
							echo "<div class='alert alert-error'>".$_GET['msg']."</div>";
						}
					?>

					<!-- form login -->
					<form action="" method="POST">
						
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Smkn3su</label>
          <label for="signup" class="slide signup">Dinamika</label>
          <div class="slider-tab"></div>
        </div>
        
           
           




						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" placeholder="Username" class="input-control">
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="password" name="pass" placeholder="Password" class="input-control">
						</div>
 <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="submit" value="Login" class="btn">
            </div>
						

					</form>

					<?php

						if(isset($_POST['submit'])){

							$user = mysqli_real_escape_string($conn, $_POST['user']);
							$pass = mysqli_real_escape_string($conn, $_POST['pass']);

							$cek  = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '".$user."' ");
							if(mysqli_num_rows($cek) > 0){

								$d = mysqli_fetch_object($cek);
								if(md5($pass) == $d->password){

									$_SESSION['status_login']   = true;
									$_SESSION['uid'] 			= $d->id;
									$_SESSION['uname'] 			= $d->nama;
									$_SESSION['ulevel'] 		= $d->level;

									echo "<script>window.location = 'admin/index.php'</script>";

								}else{
									echo '<div class="alert alert-error">Password salah</div>';
								}

							}else{
								echo '<div class="alert alert-error">Username tidak ditemukan</div>';
							}

						}

					?>

				</div>

				<!-- box footer -->
				<div class="box-footer text-center">
					<a href="index.php" class="bi bi-easel2">Halaman Utama</a>
				</div>

			</div>

		</div>

	</body>
</html>