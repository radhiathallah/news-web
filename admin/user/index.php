<?php
$query = mysqli_query($koneksi, "SELECT * FROM tb_user ORDER BY id_user ASC");
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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
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
                            <a href="?page=user/tambah" class="btn btn-secondary mb-4"><i class="fa fa-plus m-1"></i>Tambahkan Kategori</a>
                            <table id="example" class="display text-center" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Username</th>
                                        <th>Nama Lengkap</th>
                                        <th>Level</th>
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
                                            <td><?php echo $data['username'] ?></td>
                                            <td><?php echo $data['nama_lengkap'] ?></td>
                                            <td><?php echo $data['level'] ?></td>
                                            <td>
                                                <a href="ubah.php?id_user=<?= $data['id_user'] ?>" style="background-color:green;padding:5px;color:white;border-radius:4px;text-decoration:none;"><i class="fa fa-list m-1"></i>Ubah</a>
                                                <a href="proses_hapus.php?id_user=<?= $data['id_user'] ?>" style="background-color:red;padding:5px;color:white;border-radius:4px;text-decoration:none;"><i class="fa fa-trash m-1"></i>Hapus</a>
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
<!--**********************************
            Content body end
        ***********************************-->

<!-- <table class="table table-striped" border="1" style="border-collapse:collapse;width:100%;text-align:center;" cellpadding="10px">
    <a href="tambah.php" style="border-radius:4px;padding:5px;background-color:black;color:white;text-decoration:none;">Tambah Data</a>
    <br><br>
    <thead>
        <th>No.</th>
        <th>Nama Kategori</th>
        <th>Action</th>
    </thead>
    
</table> -->
<br><br>
<a href="../berita/index.php" style="border-radius:4px;padding:5px;background-color:blue;color:white;text-decoration:none;justify-content:right;">Halaman Berita</a>

<?php
include "../layout/footer.php";
?>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>