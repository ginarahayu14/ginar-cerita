<?php
	include "db/koneksi.php";
	session_start();
	if (!isset($_SESSION['login'])) {
    header('location:beranda.php');
  }
  	$post_id = $_GET['id'];
  	$email = $_SESSION['email'] ;

  	$data = $conn->query("INSERT INTO perpustakaan VALUES ('', '$post_id', '$email')");
  	if ($data) {
  		echo ("<script LANGUAGE='JavaScript'>
	    window.alert('Berhasil Ditambahkan Ke Daftar Bacaan');
	    window.location.href='beranda.php?beranda=profile&profile=perpustakaan';
	    </script>");
  	}
    
?>