<?php
include "db/koneksi.php";
// update jadi publis
if (isset($_POST['update_profile'])) {
  $id        = $_POST['id'];
  $nama      = $_POST['nama'];
  $email     = $_POST['email'];
  $username  = $_POST['username'];
  $photo       = $_FILES['photo']['name'];
  $namaSementara  = $_FILES['photo']['tmp_name'];
  move_uploaded_file($namaSementara, 'images/' . $photo);
  $update_publis = $conn->query("UPDATE tb_user SET  nama='$nama', username='$username', email='$email', photo='$photo' WHERE id='$id'");
  if ($update_publis) {
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('Berhasil Di Publish');
      window.location.href='beranda.php?beranda=profile&profile=cerita';
      </script>");
  }
}

?>

<div class="container">
  <div class="col-md-6 mx-auto">
    <?php
    $update_user = mysqli_query($conn, "SELECT * FROM tb_user WHERE email='$_SESSION[email]'");
    while ($u = mysqli_fetch_array($update_user)) {
    ?>
      <form class="col-md-8" method="post" enctype="multipart/form-data" action="">
        <?php if (empty($u['photo'])) : ?>
          <div class="form-group d-flex justify-content-center">
            <div class=" rounded-circle">
              <img src="images/yamato.jpg" onClick="triggerClick()" id="profileDisplay" class=" rounded-circle" style="width:200px;height: 200px; object-fit: cover 50% 50% no-repeat">
              <input type="file" name="photo" value="<?php echo $u['photo'] ?>" onChange="displayImage(this)" id="profileImage" style="display: none;" />
            </div>
          </div>
        <?php else : ?>
          <div class="form-group d-flex justify-content-center">
            <div class=" rounded-circle">
              <img src="images/<?php echo $u['photo'] ?>" onClick="triggerClick()" id="profileDisplay" class=" rounded-circle" style="width:200px;height: 200px; object-fit: cover 50% 50% no-repeat">
              <input type="file" name="photo" onChange="displayImage(this)" id="profileImage" style="display: none;" value="<?php echo $u['photo'] ?>" />
            </div>
          </div>
        <?php endif ?>

        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $u['nama'] ?>" name="nama">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $u['username'] ?>" name="username">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly="" value="<?php echo $u['email'] ?> " name="email">
          <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $u['id'] ?>" name="id">
        </div>

        <div class="form-group">
          <input type="submit" class="form-control btn btn btn-success" value="Ubah" name="update_profile">
        </div>
      </form>
    <?php
    }
    ?>
  </div>
</div>



<script type="text/javascript">
  function triggerClick(e) {
    document.querySelector('#profileImage').click();
  }

  function displayImage(e) {
    if (e.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
      }
      reader.readAsDataURL(e.files[0]);
    }
  }
</script>