<style>
    .table{
        width: 70%;
    }
    .btn{
        margin-top: 10%;
        margin-left: 15%;
        margin-bottom: 2%;
        background-color: #ECF2FF;
    }
    .container{
        background-color: #EBC7E6;
        width: 80%;
        padding-bottom: 6%;
    }
    .e{
        color: green;
    }
    .c{
        color: red;
    }
</style>
<?php 
if (isset($_POST['add'])){
    $id =$_POST['id'];
    $nama          = $_POST['nama'];
      $add = mysqli_query($koneksi, "SELECT * FROM tb_kategori VALUES ('', '$nama')");
     if ($add) {
        echo (
            "<script LANGUAGE='JavaScript'>
            window.alert('Berhasil Di Publish');
            window.location.href='index.php?halaman=kategori';
            </script>"
        );
    }
    }
?>
<div class="container">
<a class="btn" href="index.php?halaman=add_kategori" role="button">Tambah Kategori</a>
<center><table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
 

  <!-- <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td><a href="" class="e">Edit</a> l
      <a href="" class="c">Hapus</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td>Thornton</td>
    </tr> -->
</table></center>
</div>