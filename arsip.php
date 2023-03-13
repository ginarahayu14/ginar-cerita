<?php $email = $email = $_SESSION["user"]["email"];?>
<?php
include "db/koneksi.php";
  $data = $conn->query("SELECT * FROM tb_post WHERE status = 'arsip' AND user_id='$email'");
  while($d = mysqli_fetch_array($data)){
?>
<div class="col-md-2">
	<div class="card" >
	  <img src="images/<?php echo $d['photo'] ?>" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title" style="font-size: 16px"><?php echo $d['judul'] ?></h5>
	    <p class="card-text"><?php echo mb_strimwidth( $d['isi'],0, 50, "..."); ?></p>
	    <div class="btn-group" role="group">
		    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		      Pilihan
		    </button>
		    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
		      <a class="dropdown-item" href="beranda.php?beranda=edit&id=<?php echo $d['id'] ?>">Edit</a>
		      <a class="dropdown-item" href="beranda.php?beranda=delete&id=<?php echo $d['id'] ?>" onclick="return confirm('Anda yakin mau menghapus cerita ini ?')">Hapus</a>
		    </div>
	  	</div>
	  </div>
	</div>
</div>
<?php
	}
?>
