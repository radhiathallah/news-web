<?php
include '../koneksi.php';

$nama = $_POST['nama'];

$tambah = mysqli_query($koneksi, "INSERT INTO tb_kategori (nama_kategori) VALUES ('$nama')");

if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambahkan' )
    window.location.href='?page=kategori/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Ditambahkan')
    window.location.href='?page=kategori/index'
    </script>";
};
