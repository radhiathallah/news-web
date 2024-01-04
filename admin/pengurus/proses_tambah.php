<?php
include '../koneksi.php';

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$foto = $_POST['foto'];

$namafile = $_FILES['foto']['name'];
$namasementara = $_FILES['foto']['tmp_name'];

// pindahkan file
$terupload = move_uploaded_file($namasementara, '../images/' . $namafile);

$tambah = mysqli_query($koneksi, "INSERT INTO tb_pengurus (nama_lengkap,jabatan,foto) VALUES ('$nama','$jabatan','$namafile')");

if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambahkan' )
    window.location.href='?page=pengurus/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Ditambahkan')
    window.location.href='?page=pengurus/index'
    </script>";
};
