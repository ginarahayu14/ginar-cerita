<?php
	include "db/koneksi.php";
	session_start();
 
	if (isset($_SESSION['login'])) {
	    header("Location: beranda.php");
	}
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$pass  = $_POST['pass'];
		$query = $conn->query("SELECT * FROM tb_user WHERE email='$email'");
		$r = mysqli_num_rows($query);
		if ($r > 0) {
			while($row = mysqli_fetch_array($query)){
				$user_id = $row['id'];
				$user_email = $row['email'];
				$user_pass = $row['password'];
			}
			if ($email == $user_email && $pass == $user_pass) {
				$_SESSION['login'] = true;
				$_SESSION['id'] = $user_id;
				header('location:beranda.php');
			}else{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('pasword salah')
      window.location.href='login.php';
    </SCRIPT>");
			}
		}else{
			 echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('Akun Belum Terdaftar, Belum Punya akun? Klik OK untuk daftar')
      window.location.href='daftar.php';
    </SCRIPT>");
		}



	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section>	
		<div class="img-box">
			<img src="images/read-ebook.jpg">
		</div>
		<div class="content-box">
			<div class="form-box">
				<div class="logo">
					<center>
						<img src="images/ine-logo.png"><br>
						<h2>Masuk</h2>
					</center>
				</div>
				<form action="" method="post">
					<div class="input-box">
						<span>Email</span>
						<input type="email" name="email">
					</div>

					<div class="input-box">
						<span>Kata sandi</span>
						<input type="password" name="pass">
					</div>

					<div class="remember">
						<label><input type="checkbox" name="">Ingatkan saya</label>
					</div>

					<div class="input-box">
						<input type="submit" value="Masuk" name="login">
					</div>

					<div class="input-box">
						<p>Belum punya akun? <a href="daftar.php">Daftar</a></p>
					</div>

				</form>
			</div>	
		</div>
	</section>
</body>
</html>