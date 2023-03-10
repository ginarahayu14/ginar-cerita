<?php
	include "../db/koneksi.php";
	session_start();
 
	if (isset($_SESSION['login'])) {
	    header("Location: login.php");
	}
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password  = $_POST['password'];
		$query = $conn->query("SELECT * FROM tb_admin WHERE email='$email'");
		$r = mysqli_num_rows($query);
		if ($r > 0) {
				while ($row = $query->fetch_assoc()) {
					$_SESSION["admin"] = [
						"id" => $row["id"],
						"email" => $row["email"]    
					];
					$_SESSION['email'] = $email;
					$_SESSION['level'] = "user";
					header("location: index.php");
				}
			}else{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('pasword salah')
      window.location.href='login.php';
    </SCRIPT>");
			}
        }



	
