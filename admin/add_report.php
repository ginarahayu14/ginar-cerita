<?php
    include 'header.php';
    include '../db/koneksi.php';

?>
<style>
    .form-control{
        width: 80%;
    }
    .form-select{
        width: 80%;
    }
    .container{
        background-color: #EBC7E6;
        width: 80%;
        padding-top: 15%;
    }
    .from{
        margin-left: 15%;
    }
</style>
<?php
        if (isset($_POST['add'])) {
        $id       = $_POST['id'];
        $post_id     = $_POST['post_id'];
        $user_id     = $_POST['user_id'];
        $sebab     = $_POST['sebab'];
         $Alasan     = $_POST['Alasan'];
        $add = $conn->query("INSERT INTO tb_report VALUES ('', '$_POST[post_id]', '$_POST[user_id]', '$_POST[sebab]', '$_POST[Alasan]')");
        if ($add) {
          echo ("<script LANGUAGE='JavaScript'>
          window.alert('Berhasil tambah');
          window.location.href='index.php?halaman=report';
          </script>");
        }
      }
?>


<div class="container mb-5  pt-5 pb-5">
<form method="POST" class="from">
<div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded bg-white" style="width: 80%; text-align: center;"><b>Tambah</b></div>
    <div class="mb-3">
      <label for="" class="form-label"><b>Judul Cerita</b></label>
      <input type="text" id="" class="form-control" placeholder="">
    </div>
    <div class="mb-3">
        <label for=""><b>Sebab</b></label>
     <select class="form-select" aria-label="Default select example" value="" name="sebab">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    </div>
     <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"><b>Alasan</b></label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" value="tulis alasan" name="Alasan"></textarea>
</div>
    <button type="submit" class="btn btn-primary" value="tambah" name="add">Submit</button>
</form></div>
