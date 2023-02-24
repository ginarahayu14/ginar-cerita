

      <div class="container pt-md-3 d-flex justify-content-end" >
        <form class="form-inline" method="get" action="">
          <div class="form-group mx-sm-3 mb-2">
            <input type="hidden" class="form-control"  placeholder="Cari..." name="beranda" value="search">
            <input type="text" class="form-control"  placeholder="Cari..." name="isi">
          </div>
          <button type="submit" class="btn btn-primary mb-2" name="cari"><i class="fa fa-search" aria-hidden="true" ></i></button>
        </form>
      </div>
      
      <?php if (isset($_GET['cari'])): ?>
      <div class="container pt-md-3" >
        <div class="row">
          <div class="heading">
          <h5>Hasil Pencarian dari <?php echo $_GET['isi'] ?></h5>
        </div>
      <?php
      include "db/koneksi.php";
      $data_cerpen = $conn->query("SELECT * FROM tb_post WHERE judul LiKE '%$_GET[isi]%' AND status='publis'");
        $count = mysqli_num_rows($data_cerpen);
      if ($count > 0) {
        while($cerpen = mysqli_fetch_array($data_cerpen)){
      ?>
      <div class="col-md-2 mx-md-3 datatab">
        <div class="cover">
            <img src="images/<?php echo $cerpen['photo'] ?>" alt="<?php echo $cerpen['judul'];?>" height="300" class="img-hover">
            <div class="middle">
              <a href="tambah_perpustakaan.php?id=<?php echo $cerpen['id'] ?>"><div class="text">+ Ke Daftar Baca</div></a>
              <a href="beranda.php?beranda=detail&id=<?php echo $cerpen['id'] ?>"><div class="text">Baca Sekarang</div></a>
            </div>
        </div>
      </div>
      <?php
        }
      }else{
        echo "<h6>data yang kamu cari tidak ada</h6>";
      }
      ?>
      </div>
    </div>
      <?php else: ?>
        <!-- CONTENT TEMGAH -->
      <div class="container pt-md-3" >
      <div class="row">
      <div class="col">
      <h2 class="my-md-3">Kategori</h2>
      </div>
      <div class="col">
      <button style="margin-left: 63%; background-color: #85CDFD; height: 35px;" ><a href="beranda.php?beranda=add_kategori"><span class="text-white">Tambah Kategori</span></a></button>      
    </div>
    </div>
        <hr>
        
        <div class="row mt-md-2">
        <?php
          include "db/koneksi.php";
          $data = $conn->query("SELECT * FROM tb_kategori");
          while($d = mysqli_fetch_array($data)){

        ?>
          <div class="col-md-6 ">
            <a href="beranda.php?beranda=<?php echo $d['nama_kategori']?>" style="color: black; text-decoration: none;">
              <div class="shadow  p-3 pt-5 pb-5 mb-5  rounded" style="background-color: #6096B4;"><?php echo $d['nama_kategori']?></div>
            </a>
          </div>
          <?php

          }
          ?>
          <?php
          include "db/koneksi.php";
          if (isset($_POST['add'])) {
            $posh_id       = $_POST['posh_id'];
            $user_id       = $_POST['user_id'];
            $komentar      = $_POST['komentar'];
            $Tanggal       = $_POST['Tanggal'];
            $add = $conn->query("INSERT INTO tb_komentar VALUES ('', '$posh_id',' $user_id ','$komentar',' $Tanggal')");
            if ($add) {
              echo ("<script LANGUAGE='JavaScript'>
              window.alert('Berhasil tambah komentar');
              window.location.href='detail.php?beranda=search';
              </script>");
        }
      }
?>
        </div>
      </div>
    <!-- CONTENT TEMGAH -->
      <?php endif ?>
    

    <!-- FOOTER -->
    
    <!-- FOOTER -->




   
 