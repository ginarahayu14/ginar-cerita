<?php
    include "db/koneksi.php";
   $id = $_GET['id'];
   $data = $conn->query("DELETE FROM tb_comment WHERE id='$id'");

  if ($data) {
    echo ("<script LANGUAGE='JavaScript'>
    window.location.href='beranda.php?halaman=detail';
    </script>");
  }
?>