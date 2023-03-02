<div class="row mt-4 p-4">
    <div class="col-md-8 mt-4">
        <div class="card border-0 card-h-100">
            <div class="card-header border-0 d-flex justify-content-between" style="background-color: #EBC7E6; width: 130%;">
                <h4 class="d-inline">
                    Daftar Kategori
                </h4>
                <div class="">
                    <a href="index.php?halaman=kategori_add"><button class="btn btn-primary btn-sm"><i class="bi bi-plus"></i>Kategori</button></a>
                </div>
            </div>
            <!-- Table -->
            <div class=" h-50 table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table " style="background-color: #ECF2FF; width: 130%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php $data = $conn->query("SELECT * FROM tb_kategori"); ?>
                    <?php $no = 1; ?>
                    <?php while ($row = $data->fetch_assoc()) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row["nama"] ?></td>
                            <td>
                                <a href="index.php?id=<?php echo $row['id'] ?>&nama=<?php echo $row["nama"] ?>&update=update&halaman=edit_kategori">
                                    <i class="bi bi-pencil-fill"></i>
                                </a> |
                                <a href="index.php?id=<?php echo $row['id']?>&halaman=delete-kategori" class="text-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile ?>
                </table>

            </div>
        </div>
    </div>
</div>
