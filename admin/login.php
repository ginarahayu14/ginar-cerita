<?php
    session_start();
    include '../db/koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = ("SELECT * FROM tb_user WHERE username='$username' and password='$password'");
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
        if($row['role'] == "admin") {
	        $email = $_POST['email'];
            $_SESSION['role'] = "admin";
            header("location:login.php?index.php");
        }elseif ($row['role'] == "user") {
	        $email = $_POST['email'];
            $_SESSION['role'] = "user"; 
            header("location:login.php?beranda.php");
        }else{
            header("location:login.php?pesan=gagal");
        }
    }
}   else {
       header("location:login.php?pesan=gagal");
}

$conn->close();
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