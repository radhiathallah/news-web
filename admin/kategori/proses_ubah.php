<?php
include '../koneksi.php';

$nama = $_POST['nama'];
$id = $_POST['id_kategori'];

$ubah = mysqli_query($koneksi, "UPDATE tb_kategori SET nama_kategori='$nama' WHERE id_kategori=$id");

if ($ubah) {
    echo "<script>
    alert('Data Berhasil Diubah' )
    window.location.href='?page=kategori/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah')
    window.location.href='?page=kategori/index'
    </script>";
};
