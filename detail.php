
  <style type="text/css">
    .paragraf p
    { 
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
        <?php
          $query = mysqli_query($koneksi, "SELECT * FROM tb_post ORDER BY id DESC LIMIT 3");
          while ($a = mysqli_fetch_array($query)){
        ?>
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
        <?php
          }
        ?>

    </div>
    <!-- KONTEN KANAN -->

    <!-- KONTEN KIRI -->
    <div class="col-md-6 paragraf">
      <?php
        $id = $_GET['id'];
        $view = mysqli_query($koneksi, "UPDATE tb_post SET view= view+1 WHERE id='$id'");
        $data = mysqli_query($koneksi,"SELECT * FROM tb_post where id='$id'");
        while($detail = mysqli_fetch_array($data)){
      ?>
      <h2><?php echo $detail['judul'] ?></h2>
      <center><img src="images/<?php echo $detail['photo'] ?>"></center>
      <?php echo $detail['isi']."<br>" ?>
      <?php
        $komen =  $koneksi->query( "SELECT tb_comment.id, tb_comment.user_id, tb_comment.comment, tb_user.username FROM tb_comment INNER JOIN tb_user ON tb_comment.user_id=tb_user.id WHERE tb_comment.post_id=".$detail['id']);
        while($showcomment =  mysqli_fetch_array($komen)){
         echo $showcomment['username']."<br>";
         echo $showcomment['comment']."<hr>";
        }
        }
      ?>
    </div>

    <!-- KONTEN KIRI -->

  </div>
  </div>
