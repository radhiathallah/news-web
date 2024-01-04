<?php
$id = $_GET['id_kategori'];
$query1 = mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE id_kategori='$id'");
$query2 = mysqli_query($koneksi, "SELECT * FROM tb_kategori JOIN tb_berita ON tb_kategori.id_kategori=tb_berita.id_kategori WHERE tb_berita.id_kategori='$id' ORDER BY id_berita ASC");
$data1 = mysqli_fetch_array($query1);

?>
<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Kategori: <?= $data1['nama_kategori'] ?></h4>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>
                    <?php
                    if (mysqli_num_rows($query2) > 0) {
                        while ($data2 = mysqli_fetch_array($query2)) { ?>
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <img class="img-fluid w-100" src="images/<?= $data2['gambar'] ?>">
                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= $data2['nama_kategori'] ?></a>
                                            <a class="text-body" href=""><small><?= $data2['judul'] ?></small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="?page=landing/berita/detail&slug=<?= $data2['slug'] ?>"><?= $data2['judul'] ?></a>
                                        <p class="m-0"><?= substr($data2['isi'], 0, 35) ?>...</p>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="landing/assets/img/user.jpg" width="25" height="25" alt="">
                                            <small>John Doe</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } else { ?>
                        <div class="col-lg-12">
                            <div class="position-relative mb-3">
                                <div class="bg-white border border-top-0 p-4">
                                    <p class="text-muted font-italic text-center">No Data Available</p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>


                </div>
            </div>

            <?php
            include "landing/layout/sidebar.php";
            ?>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->