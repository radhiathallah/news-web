<?php
include "../koneksi.php";
$username = $_POST['username'];
$nama = $_POST['nama'];
$password  = $_POST['password'];
$level = $_POST['level'];

$hash_password = password_hash($pasword, PASSWORD_BCRYPT);
$cek = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username'");
if ($cek == NULL) {
    $tambah = mysqli_query($koneksi, "INSERT INTO tb_user (username,nama_lengkap,password,level) VALUES ('$username','$nama','$password','$level')");
    echo "<script>
    alert('Data Berhasil Ditambahkan' )
    window.location.href='../login/index.php'
    </script>";
} else {
    echo "<script>
    alert('Username Telah digunakan!')
    window.location.href='index.php'
    </script>";
};
