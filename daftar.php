<?php
session_start();
if (isset($_SESSION['login'])) {
	header("Location: beranda.php");
}

include "db/koneksi.php";
if (isset($_POST["daftar"])) {
	$username = $_POST['username'];
	$email    = $_POST['email'];
	$password = $_POST['password'];

	$daftar   = $conn->query("INSERT INTO tb_user VALUES ('', '', '$username', '$email', '$password','' )");
	if ($daftar) {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Pendaftaran Berhasil, Klik OK untuk Login')
				window.location.href='login.php';
				</SCRIPT>"
		);
	} else {
		echo "gagal";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Daftar</title>
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
						<h2>Daftar</h2>
					</center>
				</div>
				<form action="" method="post">
					<div class="input-box">
						<span>Nama Pengguna</span>
						<input type="text" name="username">
					</div>
					<div class="input-box">
						<span>Email</span>
						<input type="text" name="email">
					</div>

					<div class="input-box">
						<span>Kata sandi</span>
						<input type="password" name="password">
					</div>

					<div class="remember">
						<label><input type="checkbox" name="">Dengan melanjutkan, Anda menyetujui Persyaratan Layanan dan mengakui bahwa Anda telah membaca Kebijakan Privasi kami</label>
					</div>

					<div class="input-box">
						<input type="submit" value="Daftar" name="daftar">
					</div>

					<div class="input-box">
						<p>Sudah Punya Akun? <a href="login.php">Masuk Sekarang</a></p>
					</div>

				</form>
			</div>
		</div>
	</section>
</body>

</html>