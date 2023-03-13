<?php
include "db/koneksi.php";
$id = $_GET["id"];
  // update jadi publis
  if (isset($_POST['post-edit'])) {
    $judul          = $_POST['judul'];
    $kategori       = $_POST['kategori'];
    $isi            = $_POST['isi'];
    $user_id        = $_POST['user_id'];
    $namaFile       = $_FILES['sampul']['name'];
    $namaSementara  = $_FILES['sampul']['tmp_name'];
    move_uploaded_file($namaSementara, 'images/'.$namaFile);
    $update_publis = $conn->query("UPDATE tb_post SET  judul='$judul', kategori_id='$kategori', photo='$namaFile', isi='$isi', status='publis', user_id='$user_id' WHERE id='$id'");
    if ($update_publis) {
      echo ("<script LANGUAGE='JavaScript'>
      window.alert('Berhasil Diubah dan Dipublis');
      window.location.href='beranda.php?beranda=profile&profile=cerita';
      </script>");
    }
  }

  // Udate menjadi arsip
  if (isset($_POST['post-arsip'])) {
    $judul          = $_POST['judul'];
    $kategori       = $_POST['kategori'];
    $isi            = $_POST['isi'];
    $user_id        = $_POST['user_id'];
    $namaFile       = $_FILES['sampul']['name'];
    $namaSementara  = $_FILES['sampul']['tmp_name'];
    move_uploaded_file($namaSementara, 'images/'.$namaFile);
    $update_publis = $conn->query("UPDATE tb_post SET  judul='$judul', kategori_id='$kategori', photo='$namaFile', isi='$isi', status='arsip', user_id='$user_id' WHERE id='$id'");
    if ($update_publis) {
      echo ("<script LANGUAGE='JavaScript'>
      window.alert('Berhasil Diubah dan Arsipkan');
      window.location.href='beranda.php?beranda=profile&profile=cerita';
      </script>");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Cerita</title>
    <style>
      body
      {
        background: url(images/bg-1.jpeg);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .dropdown-menu 
      {
        left: 50% !important;
        transform: translateX(-50%) !important;
        top: 100% !important;
      }
      .image-upload > input 
      {
        display: none;
      }
    </style>
    
</head>

<body>

<!-- QUERY UNUTUK MEMILIH POST BERDASARKAN ID -->
<?php $edit_post =  mysqli_query($conn, "SELECT * FROM tb_post WHERE id='$id'") ?>
<?php $row = $edit_post->fetch_assoc() ?>
<!-- QUERY UNUTUK MEMILIH POST BERDASARKAN ID -->

<p id="demo"></p>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8 pt-md-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" value="<?php echo $row['judul'] ?>">
                        <input type="hidden" class="form-control" id="exampleFormControlInput1" name="user_id" value="<?php echo $email ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                        <?php $query = $conn->query("SELECT * FROM tb_kategori order by nama asc"); ?>
                        <?php while ($data=mysqli_fetch_array($query)) : ?>
                            <option value="<?php echo $data['id']?>"><?php echo $data['nama']?></option>
                        <?php endwhile ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Tulis Ceritamu</label>
                        <textarea class="form-control" id="" placeholder="Tulis disini..." rows="10" name="isi">
                        <?php if($row['isi'] != "") : ?>
                            <?php echo $row['isi'] ?>
                        <?php endif ?>
                        </textarea>
                    </div>
                </div>
                <div class="col-md-4 d-flex  justify-content-center pt-md-5">
                    <div class="card p-md-5 " style="width:225px; height: 300px;">
                        <div class="input-group text-center">
                            <div class="image-upload">
                            <!-- CEK NILAI COLOM ISI APAKAH TIDAK KOSONG -->
                            <?php if($row['isi'] == "") : ?>
                                <img src="images/add_a_photo_black_48dp.svg" style="width:90%; opacity: 0.4;" onClick="triggerClick()" id="profileDisplay">
                            <?php else : ?>
                                 <img src="images/<?php echo $row['photo'] ?>" style="width:90%; opacity: 0.4;" onClick="triggerClick()" id="profileDisplay">
                               
                            <?php endif ?>
                            <!-- CEK NILAI COLOM ISI APAKAH TIDAK KOSONG -->
                                <label for="file-input" style="font-size: 12px;">Silahkan pilih cover</label>
                                <input type="file" name="sampul" onChange="displayImage(this)" id="profileImage" style="display: none;" value="<?php echo $row['photo'] ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row">
            <div class="col-md-8 pt-md-5">
              <div class="d-grid gap-5 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="submit" name="post-edit">Posting</button>
                <button class="btn btn-primary" type="submit" name="post-arsip">Arsipkan</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>


  <script>
    tinymce.init({
      selector: '#mytextarea'
    });

    function triggerClick(e) {
      document.querySelector('#profileImage').click();
    }
    function displayImage(e) {
      if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e){
          document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
  </script>
  <!-- tinimce -->

</body>

</html>