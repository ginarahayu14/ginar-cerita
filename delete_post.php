<?php
  include "db/koneksi.php";
  $id = $_GET['id'];
  $data = $conn->query("DELETE FROM tb_post where id='$id'");
  $data = $conn->query("DELETE FROM perpustakaan where post_id='$id'");

  if ($data) {
    echo ("<script LANGUAGE='JavaScript'>
    window.location.href='beranda.php?beranda=profile&profile=cerita';
    </script>");
  }
?>