<div class="post-popular ">
    <div class="heading">
        <h3>Cerita Terbaru untuk Kamu</h3>
    </div>
    <div class="content row ">
        <?php
        $data = mysqli_query("SELECT * FROM tb_post WHERE kategori='Cerpen' AND status='publis'");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <div class="col-md-2 mx-md-3 datatab">
                <div class="cover">
                    <img src="images/<?php echo $d['photo'] ?>" alt="<?php echo $d['judul']; ?>" height="300" class="img-hover">
                    <div class="middle">
                        <a href="tambah_perpustakaan.php?id=<?php echo $d['id'] ?>">
                            <div class="text">+ Ke Daftar Baca</div>
                        </a>
                        <a href="beranda.php?beranda=detail&id=<?php echo $d['id'] ?>">
                            <div class="text">Baca Sekarang</div>
                        </a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>