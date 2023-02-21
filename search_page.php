<div class="post-popular ">
    <div class="row container d-flex justify-content-end">
    <form action="beranda.php" method="get" class="form-inline">
            <input type="text" class="form-control" placeholder="Cari ..." aria-label="Username" aria-describedby="basic-addon1" style="border: none;" name="cari">
            <input type="hidden" name="beranda" value="search_page">
            <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search" aria-hidden="true" name="cari"></button>
    </div>
    <div class="content row ">
      <?php
      if (isset($_GET['nyari'])) {
      ?>
        <div class="heading">
          <h5>Hasil Pencarian dari <?php echo $_GET['cari'] ?></h5>
        </div>
      <?php
      
        $data_cerpen = mysqli_query($koneksi,"SELECT * FROM tb_post WHERE judul LiKE '%$_GET[cari]%' AND status='publis'");
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
      }else{
      ?>
    </div>
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
      <?php
      }
      ?>
    </div>
  </div>