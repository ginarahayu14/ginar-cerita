<style>
  .row {
    background-color: #EBC7E6;
    width: 60%;
    padding: 8%;
    margin-top: 5%;
  }

  .form-control {
    margin-left: 40%;
  }

  .btn {
    margin-left: 115%;
  }
  .container{
    margin-top: 105;
  }
</style>

<?php
          if (isset($_POST['update'])) {
        $nama       = $_POST['nama'];
        $add = $conn->query("UPDATE tb_kategori SET nama='$nama' VALUES ('', '$_POST[nama]') WHERE nama='$nama'");
        if ($update) {
          echo ("<script LANGUAGE='JavaScript'>
          window.alert('Berhasil di update nama');
          window.location.href='index.php?halaman=nama';
          </script>");
        }
      }
?>

<div class="container">
  <center>
    <form class="row g-3">
      <h4>Tambah Kategori</h4>
      <div class="col-auto">
        <label for="" class="visually-hidden">Kategori</label>
        <input type="text" class="form-control" id="" placeholder="nama" name="nama">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3" name="add">Tambah</button>
      </div>
    </form>
  </center>
</div>
