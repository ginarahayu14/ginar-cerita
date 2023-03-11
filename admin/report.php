<?php
include 'header.php';
include '../db/koneksi.php';
?>
<style>
  .table {
    width: 100%;
  }

  .container {
    margin-top: 6%;
  }

  .btn {
    background-color: #A0616A;
    margin-bottom: 1%;
  }
</style>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <button class="btn mx-2" onclick="printDiv('print')" type="submit" data-toggle="print" data-placement="right" title="print"><i class='bx bx-printer'></i>Print</button>
      <div class="card-header border-0 d-flex justify-content-between" style="background-color: #A0616A; width: 100%;">
        <h4 class="d-inline">
          Laporan
        </h4>
      </div>
      <fieldset id="print">
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
              <td><?php echo $row["post_id"] ?></td>
              <td><?php echo $row["user_id"] ?></td>
              <td><?php echo $row["sebab"] ?></td>
              <td><?php echo $row["Alasan"] ?></td>
              <td>
                <a href="index.php?id=<?php echo $row['id'] ?>&halaman=delete_report" class="text-danger" onclick="return confirm('berhasil dihapus')">
                  <i class="bi bi-trash-fill"></i>
                </a>
              </td>
            </tr>
          <?php endwhile ?>
        </table>
    </div>
    <div class="col-sm-4 mt-5">
      <?php
      $query = "SELECT tb_report.id, tb_report.sebab, tb_report.Alasan, tb_report.post_id, tb_report.user_id, tb_post.judul, tb_user.username FROM  tb_report
                    INNER JOIN tb_post
                    on tb_report.post_id = tb_post.id
                    INNER JOIN tb_user
                    on tb_report.user_id = tb_user.id ";
      $result = $conn->query($query);
      while ($menu = $result->fetch_assoc()) {
      ?>
        <div class="card p-5">
          <div class="row">
            <div class="col-4">
              <img src="../images/wa15.jpg" alt="" srcset="" width="30" style="border-radius: 50%;">
            </div>
            <div class="col-8">
              <h5><?php echo $menu['judul']; ?></h5>
              <h5><?php echo $menu['username']; ?></h5>
              <p><?php echo $menu['sebab']; ?></p>
              <p><?php echo $menu['Alasan']; ?></p>
            </div>
          </div>
        </div>
      <?php 
      } ?>
    </div>
  </div>
</div>
<style>
  .card {
    background-color: #ECF2FF;
  }
</style>
</fieldset>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="text/javascript">
  function printDiv(el) {
    var a = document.body.innerHTML;
    var b = document.getElementById(el).innerHTML;

    document.body.innerHTML = b;
    window.print();
    dokument.body.innerHTML = a;
  }
</script>