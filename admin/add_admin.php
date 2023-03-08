<?php
include "../db/koneksi.php";
include "header.php";
if (isset($_POST['add'])) {
    $input = $_POST['username'];
    $information = $_POST['password'];

    $add = "INSERT INTO tb_admin ( username, password)
    VALUES ('$input','$information')";
    if ($conn->query($add) === TRUE) {
   header("location: index.php?halaman=admin");
   ob_end_flush();
  }
}
?>
<link rel="stylesheet" href="../style.css" type="text/css">
<div class="col-8 ms-5 pt-5 ps-5">
<form class="row g-3" action="" method="post">

 <div class="col-6">
 <div class="col-12">
    <label for="inputEmail4" class="form-label mt-5">Username</label>
    <input type="text" class="form-control" id="inputEmail4" name="username" required>
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Password</label>
    <input type="text" class="form-control" id="inputAddress" name="password" required>
  </div>
 </div>
  <div class="">
<input type="submit" class="btn btn-success d-inline" value="Tambah" name="add">
</div>
</form>
</div>

<?php
include "footer.php";
?>