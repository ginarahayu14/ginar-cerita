<?php 
  include "db/koneksi.php";
  $show_user = $conn->query("SELECT * FROM tb_user WHERE email='$_SESSION[email]'");
  while ($show = mysqli_fetch_array($show_user)){
?>
      <div class="sampul">
        <div class="container">

          <?php if (empty($show['photo'])): ?>
          <div class=" pt-md-5 d-flex justify-content-center">
            <img src="images/wa15.jpg" class="profile-image profile-image-content rounded-circle" >
          </div>
          <?php else: ?>
            <div class=" pt-md-5 d-flex justify-content-center">
           
            <img src="images/<?php echo $show['photo'] ?>" class="profile-image profile-image-content rounded-circle" >
          </div>
          
          <?php endif ?>


          <?php if (empty($show['nama'])): ?>
          <div class="pt-md-2 d-flex justify-content-center">
            <b>Nama Belum Di Tambahkan</b>
          </div>
          <?php else: ?>
          <div class="pt-md-2 d-flex justify-content-center">
            <b><?php echo $show['nama'] ?></b>
          </div>
          <?php endif ?>

          <div class="pt-md-2 pb-md-3 d-flex justify-content-center">
            @<?php echo $show['username'] ?>
          </div>

          <div class="pb-md-5 d-flex justify-content-center">
            <a href="beranda.php?beranda=edit_profile&user_email=<?php echo $_SESSION['email']?>">
              <button type="button" class="btn btn-primary">Edit Profile    <i class="fas fa-edit"></i></button>
            </a>
          </div>
         
        </div>
      </div>
    <?php 
      }
     ?>
    <nav class="navbar navbar-light">
      <div class="container">
        <ul class="nav justify-content-start">
          <li class="nav-item nav-item-black">
            <a  class="nav-link" aria-current="page" href="beranda.php?beranda=profile&profile=cerita">Cerita ku</a>
          </li>
          <li class="nav-item nav-item-black">
            <a class="nav-link" href="beranda.php?beranda=profile&profile=arsip">Arsip</a>
          </li>
          <li class="nav-item nav-item-black">
            <a class="nav-link" aria-current="page" href="beranda.php?beranda=profile&profile=perpustakaan">Perpustakaan</a>
          </li>
        </ul>
      </div>
    </nav>

      <div class="container p-md-4">
        <div class="row">
          <?php
            if(!empty($_GET['beranda'])){ //kondisi apakan ada parameter p didalam url
              if ($_GET['profile'] == "cerita") {
                include "cerita.php";
              } elseif ($_GET['profile'] == "arsip") {
                include "arsip.php";
              } else {
                include "perpustakaan.php";
              }
            } else {
              include('cerita.php');
            }
        ?>
          
        </div>
      </div>
    
   

 <!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>
</html> -->