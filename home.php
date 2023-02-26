<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <h2>Semua misteri terungkap!</h2>
            <p>Baca semua episode-nya sekarang!</p>
            <img src="images/green.png" class="d-block w-100" alt="..." style="border-radius: 16px; ">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <h2>Semua misteri terungkap!</h2>
            <p>Baca semua episode-nya sekarang!</p>
            <img src="images/denial_hfc_desktop.jpg" class="d-block w-100" alt="..." style="border-radius: 16px;">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <h2>Semua misteri terungkap!</h2>
            <p>Baca semua episode-nya sekarang!</p>
            <img src="images/montain.png" class="d-block w-100" alt="..." style="border-radius: 16px;">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="greeting-and-content-settings">
    <div class="module-content">
        <?php
        $sel = $conn->query("SELECT * FROM tb_user WHERE id='$_SESSION[id]'");
        while ($nam = mysqli_fetch_array($sel)) {
        ?>
            <div class="greeting">
                <h2 class="greeting-text">Selamat datang, <?php echo $nam['username'] ?></h2>
            </div>
        <?php
        }
        ?>
    </div>
    <hr class="module-divider">
</div>


<div class="post-popular ">
    <div class="heading">
        <h3>Cerita Terbaru untuk Kamu</h3>
    </div>
    <div class="content row ">
        <?php
        $data = $conn->query("SELECT * FROM tb_post WHERE status='publis' limit 5");
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

<div class="pilihan p-md-5">
    <?php
    $pupular = $conn->query("SELECT * FROM tb_post ORDER BY view DESC limit 1");
    while ($p = mysqli_fetch_array($pupular)) {
    ?>
        <div class="content row">
            <div class="col-md-4 p-md-2">
                <div class="cover">
                    <img src="images/<?php echo $p['photo'] ?>" alt="Kisah Anak SMK cover" width="80%" style="border-radius:8px; box-shadow: -1px 1px 13px 3px rgba(0,0,0,0.24);-webkit-box-shadow: -1px 1px 13px 3px rgba(0,0,0,0.24);-moz-box-shadow: -1px 1px 13px 3px rgba(0,0,0,0.24);">
                </div>
            </div>
            <div class="artikel col-md-8 p-md-2">
                <div class="description">
                    <h2 class="Judul"><?php echo $p['judul'] ?></h2>
                    <p>
                        <?php echo $p['isi'] ?>
                    </p>
                    <span class="material-icons">arrow_forward_ios</span></p>
                </div>
            </div>
        </div>

    <?php
    }
    ?>
</div>


<?php $kategori = $conn->query("SELECT * FROM tb_kategori"); ?>
<?php while ($kate = $kategori->fetch_assoc()) : ?>
    <div class="post-popular ">
        <div class="heading">
            <h3><?php echo $kate["nama"] ?> Terbaru untuk Kamu</h3>
        </div>
        <div class="content row">
            <?php $kategori_id = $kate["id"]; ?>
            <?php $data_cerpen = mysqli_query($conn, "SELECT * FROM tb_post WHERE kategori_id='$kategori_id' AND status='publis' limit 5");
            while ($cerpen = mysqli_fetch_array($data_cerpen)) {
            ?>
                <div class="col-md-2 mx-md-3 datatab">
                    <div class="cover">
                        <img src="images/<?php echo $cerpen['photo'] ?>" alt="<?php echo $cerpen['judul']; ?>" height="300" class="img-hover">
                        <div class="middle">
                            <a href="tambah_perpustakaan.php?id=<?php echo $cerpen['id'] ?>">
                                <div class="text">+ Ke Daftar Baca</div>
                            </a>
                            <a href="beranda.php?beranda=detail&id=<?php echo $cerpen['id'] ?>">
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
<?php endwhile; ?>

<!-- MODAL -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <span id="detail-post-id"></span>
        </div>
    </div>
</div>
</div>
<!-- MODAL -->

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '#show-post', function() {
            var id = 2;
            var judul = 'a';
            $('#detail-post-id').text(id);
            $('#detail-post-judul').text(judul);

        })
    });
</script>