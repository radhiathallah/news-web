<?php

session_start();
if ($_SESSION['id_user'] == NULL) {
    echo "<script>
    alert('Silahkan Login Terlebih Dahulu!')
    window.location.href='login/index.php'
    </script>";
}

include "koneksi.php";
include "layout/header.php";
include "layout/sidebar.php";
include "content.php";
include "layout/footer.php";
