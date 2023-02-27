<?php
    include "../db/koneksi.php";
?>
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
            $id =$_GET['id'];
            $nama= $_GET['nama'];
          if (isset($_POST['update'])) {
            $id =$_GET['id'];
            $nama2= $_POST['nama'];
             $update = $conn->query("UPDATE tb_kategori SET nama='$nama2' WHERE id='$id'");
                 if ($update) {
                        echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Berhasil di update nama');
                        window.location.href='index.php?halaman=kategori';
                        </script>");
        }
      }
?>

<div class="container">
  <center>
    <form method="POST" class="row g-3">
      <h4>Edit Kategori</h4>
      <div class="col-auto">
        <label for="" class="visually-hidden">Kategori</label>
        <input type="text" class="form-control" id="" placeholder="nama" name="nama" value="<?php echo "$nama";?>">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3" name="update" VALUES="update">Update</button>
      </div>
    </form>
  </center>
</div>
