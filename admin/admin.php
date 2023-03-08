<?php
  include 'header.php';
  include '../db/koneksi.php';
?>
<style>
  .table{
    width: 100%;
  }
  .container{
    margin-top: 8%;
  }
  .btn {
    background-color: #EBC7E6;
    margin-bottom: 1%;
  }
</style>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <div class="card-header border-0 d-flex justify-content-between" style="background-color: #EBC7E6; width: 100%;">
    
      <h4 class="d-inline">
        Laporan
      </h4>
       <a class="btn btn-danger" href="index.php?halaman=add_admin">Tambah</a>
      </div>
          <table class="table" style="background-color: #ECF2FF;">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Aksi</th>

            </thead>
            <?php $data = $conn->query("SELECT * FROM tb_admin"); ?>
              <?php $no = 1; ?>
              <?php while ($row = $data->fetch_assoc()) : ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row["username"] ?></td>
                  <td><?php echo $row["password"] ?></td>
                 <td>
                  <a href="index.php?id=<?php echo $row['id']?>&halaman=delete_admin" class="text-danger">
                    <i class="bi bi-trash-fill"></i>
                  </a>
                </td>
                </tr>
                <?php endwhile ?>
          </table>
           
      </div>
        
    </div>
</div>

 </fieldset> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="text/javascript">
  function printDiv (el) {
    var a= document.body.innerHTML;
    var b= document.getElementById(el).innerHTML;

    document.body.innerHTML=b;
    window.print();
    dokument.body.innerHTML=a;
  }
</script>
   


