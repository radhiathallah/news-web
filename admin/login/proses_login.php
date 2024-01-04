<?php
include "../koneksi.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username'
    AND password='$password' ");

    if (mysqli_num_rows($user) > 0) {
        $data = mysqli_fetch_assoc($user);

        session_start();
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['level'] = $data['level'];

        echo "<script> alert('Login Berhasil')
        window.location='../index.php'
        </script>";
    } else {
        echo "<script> alert('Username atau Password Salah')
        window.location='index.php'
        </script>";
    }
}
