<?php
include "../db/koneksi.php";
include "header.php";
if (isset($_POST['add'])) {
    $input = $_POST['email'];
    $information = $_POST['password'];

    $add = "INSERT INTO tb_user ( email, password)
    VALUES ('$input','$information')";
    if ($conn->query($add) === TRUE) {
   header("location: index.php?halaman=user");
   ob_end_flush();
  }
}
?>
<link rel="stylesheet" href="../style.css" type="text/css">
<div class="col-8 ms-5 pt-5 ps-5">
<form class="row g-3" action="" method="post">

 <div class="col-6">
 <div class="col-12">
    <label for="inputEmail4" class="form-label mt-5">Email</label>
    <input type="text" class="form-control" id="inputEmail4" name="email" required>
  </div>



  
  <div class="col-12">
    <label for="inputAddress" class="form-label">Password</label>
    <input type="text" class="form-control" id="inputAddress" name="password" required>
  </div>
 </div>
  <div class="">
<input type="submit" class="btn d-inline" onclick="return confirm('berhasil di tambah')" value="Tambah" name="add" style="background-color:#A0616A;">
</div>
</form>
</div>

<?php
include "footer.php";
?>