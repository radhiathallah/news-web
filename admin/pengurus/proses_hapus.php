<?php
include '../koneksi.php';

$id = $_GET['id_pengurus'];

$hapus = mysqli_query($koneksi, "DELETE FROM `tb_pengurus` WHERE id_pengurus=$id");


if ($hapus) {
    echo "<script>
    alert('Data berhasil dihapus!')
    window.location.href='?page=pengurus/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Dihapus!')
    window.location.href='?page=pengurus/index'
    </script>";
};
