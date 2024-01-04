<br>
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, Welcome back!</h4>
                    <span class="ml-1">Datatable</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Berita</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                    <a href="?page=berita/tambah" class="btn btn-secondary mb-4"><i class="fa fa-plus m-1"></i>Tambahkan Berita</a>
                        <form method="post" id="myForm">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <?php
                                        $dari = isset($_POST['dari']);
                                        ?>
                                        <label for=""></label>
                                        <input type="date" name="dari" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="font-primary"></label>
                                        <input type="date" name="sampai" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for=""> </label>
                                        <button type="submit" name="filter" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for=""> </label>
                                        <button type="submit" onclick="cetak()" class="btn btn-primary"><i class="fa fa-print"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <script>
                        function cetak(){
                            $('myForm').attr('action','berita/print.php');
                            $('myForm').attr('target','_blank');
                            $('myForm').submit();
                        }
                    </script>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display text-center" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kategori</th>
                                        <th>Judul</th>
                                        <th>Tanggal Berita</th>
                                        <th>Isi Berita</th>
                                        <th>Gambar Berita</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    if(isset($_POST['filter'])){
                                        $query = mysqli_query($koneksi,"SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori WHERE tanggal BETWEEN '$_POST[dari]' AND '$_POST[sampai]' ORDER BY id_berita DESC");
                                    }else{
                                        $query = mysqli_query($koneksi, "SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori ORDER BY id_berita DESC");
                                    }
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?>.</td>
                                            <td><?= $data['nama_kategori'] ?></td>
                                            <td style="width:100px"><?php echo $data['judul'] ?></td>
                                            <td><?php echo date('d F Y', strtotime($data['tanggal'])) ?></td>
                                            <td style="width:200px"><?php echo $data['isi'] ?></td>
                                            <td><img src="../images/<?php echo $data['gambar'] ?>" alt="" style="width:120px;height:120px;"></td>
                                            <td>
                                                <a href="?page=berita/ubah&id_berita=<?= $data['id_berita'] ?>" style="background-color:green;padding:5px;color:white;border-radius:4px;text-decoration:none;"><i class="fa fa-edit m-1"></i>Ubah</a>
                                                <a href="?page=berita/proses-hapus&id_berita=<?= $data['id_berita'] ?>" style="background-color:red;padding:5px;color:white;border-radius:4px;text-decoration:none;" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="fa fa-trash m-1"></i>Hapus</a>
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