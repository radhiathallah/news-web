<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <?php
    $id = $_GET['id_pengurus'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_pengurus WHERE id_pengurus='$id'");
    $ubah = mysqli_fetch_array($query);
    ?>

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <span class="ml-1">Element</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Vertical Form</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="?page=pengurus/proses_ubah" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Pengurus</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Pengurus" value="<?= $ubah['nama_lengkap'] ?>">
                                            <input type="hidden" class="form-control" name="id_pengurus" value="<?= $ubah['id_pengurus'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jabatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="jabatan" placeholder="Jabatan Pengurus" value="<?= $ubah['jabatan'] ?>">
                                        </div>
                                    </div>
                                    <br><br><br>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Gambar Lama</label>
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <img class="mb-2" src="../images/<?php echo $ubah['foto'] ?>" alt="" style="width:120px;height:120px;">
                                                    <input type="hidden" name="foto_lama" value="<?= $ubah['foto'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Gambar Berita</label>
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="foto">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>