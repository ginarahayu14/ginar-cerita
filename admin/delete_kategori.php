<?php
    include "../db/koneksi.php";
   $id = $_GET['id'];
   $data = $conn->query("DELETE FROM tb_kategori WHERE id='$id'");

  if ($data) {
    echo ("<script LANGUAGE='JavaScript'>
    window.location.href='index.php?halaman=kategori';
    </script>");
  }
?>