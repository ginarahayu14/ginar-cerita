<?php
  include 'header.php';
  include '../db/koneksi.php';
?>
<style>
  .table{
    width: 130%;
  }
  .container{
    margin-top: 8%;
  }
</style>

<div class="container">
  <div class="row">
    <div class="col-md-8 ml-5">
      <div class="card-header border-0 d-flex justify-content-between" style="background-color: #EBC7E6; width: 130%;">
      <h4 class="d-inline">
                    Laporan
                </h4>
            </div>
      <table class="table" style="background-color: #ECF2FF;">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Post Id</th>
      <th scope="col">User Id</th>
      <th scope="col">Sebab</th>
      <th scope="col">Alasan</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <?php $data = $conn->query("SELECT * FROM tb_report"); ?>
                    <?php $no = 1; ?>
                    <?php while ($row = $data->fetch_assoc()) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row["user_id"] ?></td>
                            <td><?php echo $row["post_id"] ?></td>
                            <td><?php echo $row["sebab"] ?></td>
                            <td><?php echo $row["Alasan"] ?></td>
                            <td>
                                <a href="index.php?id=<?php echo $row['id']?>&halaman=delete_report" class="text-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile ?>
</table>
    </div>
</div>

   
