<?php
	include "../db/koneksi.php";
	session_start();
 
	if (isset($_SESSION['login'])) {
	    header("Location: index.php");
	}
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password  = $_POST['password'];
		$query = $conn->query("SELECT * FROM tb_admin WHERE email='$email'");
		$r = mysqli_num_rows($query);
		if ($r > 0) {
			while($row = mysqli_fetch_array($query)){
				$user_id = $row['id'];
				$user_email = $row['email'];
				$user_pass = $row['password'];
			}
			if ($email == $user_email && $password == $user_pass) {
				$_SESSION['login'] = true;
				$_SESSION['id'] = $user_id;
				header('location:index.php');
			}else{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('pasword salah')
      window.location.href='login.php';
    </SCRIPT>");
			}
        }



	}
