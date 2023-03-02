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