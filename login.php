<?php
include "db/koneksi.php";
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
				<form action="cek_login.php" method="post">
					<div class="input-box">
						<span>Email</span>
						<input type="email" name="email">
					</div>

					<div class="input-box">
						<span>Kata sandi</span>
						<input type="password" name="password">
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