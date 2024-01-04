<?php

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$id = $_POST['id_pengurus'];

// ambil data file
if ($_FILES['foto']['name'] == "") {
    $namafile = $_POST['foto_lama'];
} else {
    $namafile = $_FILES['foto']['name'];
    $namasementara = $_FILES['foto']['tmp_name'];

    unlink('../images/' . $_POST['foto_lama']);

    $terupload = move_uploaded_file($namasementara, '../images/' . $namafile);
};

$ubah = mysqli_query($koneksi, "UPDATE tb_pengurus SET nama_lengkap='$nama',jabatan='$jabatan',foto='$namafile' WHERE id_pengurus=$id");

if ($ubah) {
    echo "<script>
    alert('Data Berhasil Diubah' )
    window.location.href='?page=pengurus/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah')
    window.location.href='?page=pengurus/index'
    </script>";
};
