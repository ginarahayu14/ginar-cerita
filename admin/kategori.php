<div class="row mt-4 p-4">
    <div class="col-md-8 mt-4">
        <div class="card border-0 card-h-100">
            <div class="card-header border-0 d-flex justify-content-between">
                <h4 class="d-inline">
                    Daftar Kategori
                </h4>
                <div class="">
                    <button class="btn btn-primary btn-sm"><i class="bi bi-plus"></i>Kategori</button>
                </div>
            </div>
            <!-- Table -->
            <div class=" h-50 table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table mt-4">
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
                                <a href="keranjang_belanja.php?id=<?php echo $row['id'] ?>">
                                    <i class="bi bi-pencil-fill"></i>
                                </a> |
                                <a href="keranjang_belanja.php?id=<?php echo $row['id'] ?>" class="text-danger">
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