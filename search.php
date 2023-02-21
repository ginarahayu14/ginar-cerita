

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
      $data_cerpen = mysqli_query($koneksi,"SELECT * FROM tb_post WHERE judul LiKE '%$_GET[isi]%' AND status='publis'");
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
        <h2 class="my-md-3">Kategori</h2>
        <hr>
        <div class="row mt-md-2">
          <div class="col-md-6 ">
            <a href="beranda.php?beranda=cerpen" style="color: black; text-decoration: none;">
              <div class="shadow  p-3 pt-5 pb-5 mb-5 bg-white rounded">Cerita Pendek</div>
            </a>
          </div>
          <div class="col-md-6 " >
            <a href="beranda.php?beranda=puisi" style="color: black; text-decoration: none;">
                <div class="shadow p-3 pt-5 pb-5 mb-5 mb-5 bg-white rounded">Puisi</div>
            </a>
          </div>
          <div class="col-md-6 ">
            <a href="beranda.php?beranda=quotes" style="color: black; text-decoration: none;">
              <div class="shadow p-3 pt-5 pb-5 mb-5 mb-5 bg-white rounded">Quotes</div>
            </a>
          </div>
          <div class="col-md-6">
            <a href="beranda.php?beranda=novel" style="color: black; text-decoration: none;">
              <div class="shadow p-3 pt-5 pb-5 mb-5 mb-5 bg-white rounded">Novel</div>
            </a>
          </div>
        </div>
      </div>
    <!-- CONTENT TEMGAH -->
      <?php endif ?>
    

    <!-- FOOTER -->
    
    <!-- FOOTER -->




   
 