<?php
    include "db/koneksi.php";
    $id_post = $_GET["id_post"];
   $id_komentar = $_GET['id_komen'];
   $data = $conn->query("DELETE FROM tb_comment WHERE id='$id_komentar'");

  if ($data) {
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('Berhasildihapus');
      window.location.href='beranda.php?beranda=detail&id=$id_post';
      </script>");
  }
?>