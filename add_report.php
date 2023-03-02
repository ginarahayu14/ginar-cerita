<?php
    include 'db/koneksi.php';
    include 'admin/header.php';
?>
<style>
    .form-control{
        width: 80%;
    }
    .form-select{
        width: 80%;
    }
    .container{
        background-color: #F7C8E0;
        width: 100%;
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
          window.location.href='beranda.php?beranda=detail';
          </script>");
        }
      }
?>


<div class="container  pt-5 pb-5">
<form method="POST" class="from">
<div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded bg-white" style="width: 80%; text-align: center;"><b>Laporkan Cerita</b></div>
   <p class="d" style="padding-left: 25%;">Why are you reporting this story?</p>
      <div class="mb-3">
    <label for="" class="form-label">Judul</label>
    <input type="text" class="form-control" id="" aria-describedby="" name="judul" value="Judul Cerita">
  </div>
    <div class="mb-3">
        <label for=""><b>Sebab</b></label>
     <select class="form-select" aria-label="Default select example" value="" name="sebab">
        <option>inappropraite content</option>
        <option value="Kebencian atau Perundungan">Kebencian atau Perundungan</option>
        <option value="Kekerasan">Kekerasan</option>
        <option value="Menyakiti diri sendiri">Menyakiti diri sendiri</option>
    </select>
    </div>
     <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"><b>Alasan</b></label>
  <p>Tolong jelaskan pelanggaran Pedoman Konten kami dan di mana letaknya dalam cerita.</p>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" value="tulis alasan" name="Alasan"></textarea>
</div>
    <button type="submit" class="btn btn-primary" value="tambah" name="add">Submit</button>
</form></div>
