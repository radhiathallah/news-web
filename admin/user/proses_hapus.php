<?php
include '../koneksi.php';

$id = $_GET['id_user'];

$hapus = mysqli_query($koneksi, "DELETE FROM `tb_user` WHERE id_user=$id");


if ($hapus) {
    echo "<script>
    alert('Data berhasil dihapus!')
    window.location.href='?page=user/index.php'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Dihapus!')
    window.location.href='?page=user/index.php'
    </script>";
};
