<?php
$query = mysqli_query($koneksi, "SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori ORDER BY id_berita DESC LIMIT 4");
$query2 = mysqli_query($koneksi, "SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori ORDER BY id_berita DESC LIMIT 3");
$page = "home";
?>
<!-- Main News Slider Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7 px-0">
            <div class="owl-carousel main-carousel position-relative">
                <?php
                while ($data1 = mysqli_fetch_array($query2)) { ?>
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="images/<?= $data1['gambar'] ?>" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="?page=kategori/index&id_kategori=<?= $data1['id_kategori'] ?>"><?= $data1['nama_kategori'] ?></a>
                                <a class="text-white" href=""><?= $data1['tanggal'] ?></a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="?page=landing/berita/detail&slug=<?= $data1['slug'] ?>"><?= $data1['judul'] ?></a>
                            <p class="m-0 text-white" href=""><?= substr($data1['isi'], 0, 100) ?><a class="font-italic" href="?page=landing/berita/detail&slug=<?= $data1['slug'] ?>">...see more</a></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-lg-5 px-0">
            <div class="row mx-0">
                <?php
                while ($data2 = mysqli_fetch_array($query)) { ?>
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="images/<?= $data2['gambar'] ?>" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="?page=kategori/index&id_kategori=<?= $data2['id_kategori'] ?>"><?= $data2['nama_kategori'] ?></a>
                                    <a class="text-white" href=""><small><?= $data2['tanggal'] ?></small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="?page=landing/berita/detail&slug=<?= $data2['slug'] ?>"><?= $data2['judul'] ?></a>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>

                <!-- <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="assets/img/news-700x435-2.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                                <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="assets/img/news-700x435-3.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                                <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="assets/img/news-700x435-4.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                                <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Main News Slider End -->


<!-- Breaking News Start -->
<div class="container-fluid bg-dark py-3 mb-3">
    <div class="container">
        <div class="row align-items-center bg-dark">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Breaking News</div>
                    <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 170px); padding-right: 90px;">
                        <?php
                        $query3 = mysqli_query($koneksi, "SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori ORDER BY id_berita DESC LIMIT 3");
                        while ($data3 = mysqli_fetch_array($query3)) { ?>
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="?page=landing/berita/detail&slug=<?= $data3['slug'] ?>"><?= $data3['judul'] ?></a></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breaking News End -->


<!-- Featured News Slider Start -->
<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="section-title">
            <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
        </div>
        <div class="owl-carousel news-carousel carousel-item-4 position-relative">
            <?php
            $query4 = mysqli_query($koneksi, "SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori ORDER BY id_berita DESC");
            while ($data4 = mysqli_fetch_array($query4)) { ?>


                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="images/<?= $data4['gambar'] ?>" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="?page=landing/kategori/index&id_kategori=<?= $data4['id_kategori'] ?>"><?= $data4['nama_kategori'] ?></a>
                            <a class="text-white" href=""><small><?= $data4['tanggal'] ?></small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href=""><?= $data4['judul'] ?></a>
                    </div>
                </div>

            <?php
            } ?>

        </div>
    </div>
</div>
<!-- Featured News Slider End -->


<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>
                    <?php
                    $query5 = mysqli_query($koneksi, "SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori ORDER BY tanggal DESC LIMIT 4");
                    while ($data5 = mysqli_fetch_array($query5)) { ?>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" style="max-height:200px;" src="images/<?= $data5['gambar'] ?>" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="?page=landing/kategori/index&id_kategori=<?= $data5['id_kategori'] ?>"><?= $data5['nama_kategori'] ?></a>
                                        <a class="text-body" href=""><small><?= $data5['tanggal'] ?></small></a>
                                    </div>
                                    <a class="h5 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="?page=landing/berita/detail&slug=<?= $data5['slug'] ?>"><?= $data5['judul'] ?></a>
                                    <p class="m-0 text-justify" style="max-width:50px"><?= substr($data5['isi'], 0, 35) ?>...</p>
                                </div>
                                <div class=" d-flex justify-content-between bg-white border border-top-0 p-4">
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
                    <?php
                    }
                    ?>
                </div>
            </div>

            <?php
            include "landing/layout/sidebar.php"
            ?>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->