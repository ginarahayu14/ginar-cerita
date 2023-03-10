<?php
  include '../db/koneksi.php';
?>
<style>
  .row {
    background-color: #A0616A;
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
        if (isset($_POST['add'])) {
        $id       = $_POST['id'];
        $nama     = $_POST['nama'];
        $add = $conn->query("INSERT INTO tb_kategori VALUES ('', '$_POST[nama]')");
        if ($add) {
          echo ("<script LANGUAGE='JavaScript'>
          window.alert('Berhasil tambah nama');
          window.location.href='index.php?halaman=kategori';
          </script>");
        }
      }
?>

<div class="container">
  <center>
    <form method="POST" class="row g-3">
      <h4>Tambah Kategori</h4>
      <div class="col-auto">
        <label for="" class="visually-hidden">Kategori</label>
        <input type="text" class="form-control" id="" placeholder="nama kategori" name="nama">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn mb-3" name="add" value="tambah"style="background-color: #ECF2FF;">Tambah</button>
      </div>
    </form>
  </center>
</div>
