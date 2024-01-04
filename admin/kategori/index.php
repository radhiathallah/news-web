<?php
$query = mysqli_query($koneksi, "SELECT * FROM tb_kategori ORDER BY id_kategori ASC");

?>
<br>
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Datatable</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Kategori</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Datatable</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="?page=kategori/tambah" class="btn btn-secondary mb-4"><i class="fa fa-plus m-1"></i>Tambahkan Kategori</a>
                            <table id="example" class="display text-center" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>

                                        <tr>
                                            <td><?php echo $no++ ?>.</td>
                                            <td><?php echo $data['nama_kategori'] ?></td>
                                            <td>
                                                <a href="?page=kategori/ubah&id_kategori=<?= $data['id_kategori'] ?>" style="background-color:green;padding:5px;color:white;border-radius:4px;text-decoration:none;"><i class="fa fa-edit m-1"></i>Ubah</a>
                                                <a href="?page=kategori/proses_hapus&id_kategori=<?= $data['id_kategori'] ?>" style="background-color:red;padding:5px;color:white;border-radius:4px;text-decoration:none;" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="fa fa-trash m-1"></i>Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>