<?php
include '../koneksi.php';

$username = $_POST['username'];
$nama_lengkap = $_POST['nama_lengkap'];
$password = $_POST['password'];
$level = $_POST['level'];


$tambah = mysqli_query($koneksi, "INSERT INTO tb_user (username,nama) VALUES ('$nama','$')");

if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambahkan' )
    window.location.href='index.php'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Ditambahkan')
    window.location.href='index.php'
    </script>";
};
