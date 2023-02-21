<style type="text/css">
.paragraf p { 
    font-family: "Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;
    line-height: 32px;
    letter-spacing: -0.003em;
    font-size: 21px;
    font-weight: 400;
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
}
</style>


  
<div class="container p-md-4">
    <div class="row">

        <!-- KONTEN KANAN -->
        <div class="right-detail-content col-md-4">
            <div class="right-title">
                <h4>Postingan Terbaru</h4>
                <hr width="60%">
            </div>
            <?php $query = $koneksi->query("SELECT * FROM tb_post ORDER BY id DESC LIMIT 3"); ?>
            <?php while ($a = $query->fetch_array()) : ?>
            <div class="right-content">
                <div class="row mb-md-2">
                    <div class="col-md-4 right-content-img d-flex justify-content-center">
                        <img src="images/<?php echo $a['photo'] ?>" width="100%">
                    </div>
                    <div class="col-md-8 pr-md-2 right-content-description">
                        <b style="margin-bottom: 22px;"><?php echo $a['judul'] ?></b>
                        <?php echo substr($a['isi'], 0, 150)." ... " ?>
                    </div>
                </div>
            </div>
            <?php endwhile ; ?>
        </div>
        <!-- KONTEN KANAN -->

        <!-- KONTEN KIRI -->
        <div class="col-md-6 paragraf">
        <?php
        $id = $_GET['id'];
        $view = $koneksi->query("UPDATE tb_post SET view= view+1 WHERE id='$id'");
        $data = $koneksi->query("SELECT * FROM tb_post where id='$id'");
        ?>
        <?php while($detail = $data->fetch_array()) : ?>
            <h2><?php echo $detail['judul'] ?></h2>
            <center><img src="images/<?php echo $detail['photo'] ?>"></center>
            <?php echo $detail['isi']."<br>" ?>
            <div class="mt-4">
                <div class="d-flex justify-content-between align-items-end">
                    <div class="total-komentar">
                        <h5>4 Komentar</h5>
                    </div>
                    <div class="report">
                        <button class="btn alert-danger">Laporkan</button>
                    </div>
                </div>
                <hr>
            </div>
            <!-- FORM KOMENTAR -->
            <div>
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-10 form-komen">
                        <textarea name="" id="" rows="2" class="form-control text-komen"></textarea>
                        <button class="button-komen btn btn-primary mt-2 float-md-end" type="submit">Kirim Komentar</button>
                    </div>
                    
                </div>
            </div>
            <!-- FORM KOMENTAR -->
            <!-- MENAMPILKAN KOMENTAR -->
            <?php
            $komen =  $koneksi->query( "SELECT tb_comment.id, tb_comment.user_id, tb_comment.comment, tb_user.username FROM tb_comment INNER JOIN tb_user ON tb_comment.user_id=tb_user.id WHERE tb_comment.post_id=".$detail['id']);
            ?>
            <?php while($showcomment =  $komen->fetch_array()){
                echo $showcomment['username']."<br>";
                echo $showcomment['comment']."<hr>";
            }
            ?>
            <?php endwhile ; ?>
            <!-- MENAMPILKAN KOMENTAR -->
        </div>
        <!-- KONTEN KIRI -->

    </div>
</div>
