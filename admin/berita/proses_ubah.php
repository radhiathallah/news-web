<?php

$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$isi = $_POST['isi'];
$id = $_POST['id_berita'];

// ambil data file
if ($_FILES['gambar']['name'] == "") {
    $namafile = $_POST['gambar_lama'];
} else {
    $namafile = $_FILES['gambar']['name'];
    $namasementara = $_FILES['gambar']['tmp_name'];

    unlink('../images/' . $_POST['gambar_lama']);

    $terupload = move_uploaded_file($namasementara, '../images/' . $namafile);
};

$ubah = mysqli_query($koneksi, "UPDATE tb_berita SET judul='$judul',tanggal='$tanggal',isi='$isi',gambar='$namafile' WHERE id_berita=$id");

if ($ubah) {
    echo "<script>
    alert('Data Berhasil Diubah' )
    window.location.href='?page=berita/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah')
    window.location.href='?page=berita/index'
    </script>";
};
