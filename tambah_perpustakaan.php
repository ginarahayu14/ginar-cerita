<?php
	include "db/koneksi.php";
	session_start();
	if (!isset($_SESSION['login'])) {
    header('location:index.php');
  }
  	$post_id = $_GET['id'];
  	$user_id = $_SESSION['id'] ;

  	$data = mysqli_query($koneksi,"INSERT INTO perpustakaan VALUES ('', '$post_id', '$user_id')");
  	if ($data) {
  		echo ("<script LANGUAGE='JavaScript'>
	    window.alert('Berhasil Ditambahkan Ke Daftar Bacaan');
	    window.location.href='beranda.php?beranda=profile&profile=perpustakaan';
	    </script>");
  	}
    
?>