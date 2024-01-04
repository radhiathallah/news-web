<?php
$id = $_GET['id_berita'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori WHERE id_berita='$id'");
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
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Tambah Berita</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="?page=berita/proses_ubah" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_berita" value="<?= $ubah['id_berita'] ?>">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Judul Berita</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul" value="<?= $ubah['judul'] ?>" placeholder="Judul Berita">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="id_kategori" id="">
                                            <option value="<?= $ubah['id_kategori'] ?>"><?= $ubah['nama_kategori'] ?></option>
                                            <?php
                                            include "../koneksi.php";
                                            $id_kategori = $ubah["id_kategori"];
                                            $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE id_kategori <> '$id_kategori' ORDER BY id_kategori ASC");
                                            while ($data = mysqli_fetch_array($query)) { ?>

                                                <option value="<?= $data['id_kategori'] ?>"><?= $data['nama_kategori'] ?></option>
                                            <?php
                                            };
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="tanggal" value="<?= $ubah['tanggal'] ?>" placeholder="Nama Kategori">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Isi Berita</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="4" id="comment" name="isi" value="" required><?= $ubah['isi'] ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Gambar Lama</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <img class="mb-2" src="../images/<?php echo $ubah['gambar'] ?>" alt="" style="width:120px;height:120px;">
                                                <input type="hidden" name="gambar_lama" value="<?= $ubah['gambar'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Gambar Berita</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="gambar">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
            Footer start
        ***********************************-->