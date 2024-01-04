<?php
$query = mysqli_query($koneksi, "SELECT * FROM tb_pengurus ORDER BY id_pengurus DESC");
?>
<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Daftar Pengurus</h4>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>
                    <?php
                    if (mysqli_num_rows($query) > 0) {
                        while ($data = mysqli_fetch_array($query)) { ?>
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <img class="img-fluid w-100" style="max-height:250px;" src="images/<?= $data['foto'] ?>">
                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-3">
                                            <a class="text-right badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= $data['jabatan'] ?></a>
                                        </div>
                                        <a class="h6 d-block mb-3 text-secondary text-uppercase font-weight-bold" href=""><?= $data['nama_lengkap'] ?></a>
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