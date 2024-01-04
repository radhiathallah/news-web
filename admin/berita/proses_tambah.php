<?php
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$isi = $_POST['isi'];
$id_kategori = $_POST['id_kategori'];

// ambil data file
$namafile = $_FILES['gambar']['name'];
$namasementara = $_FILES['gambar']['tmp_name'];
$slug = str_replace('+', '-', urlencode($judul));

// pindahkan file
$terupload = move_uploaded_file($namasementara, '../images/' . $namafile);

$tambah = mysqli_query($koneksi, "INSERT INTO tb_berita (id_kategori,judul,tanggal,isi,gambar,slug) VALUES ('$id_kategori','$judul','$tanggal','$isi','$namafile','$slug')");

if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambahkan' )
    window.location.href='?page=berita/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Ditambahkan')
    window.location.href='?page=berita/index'
    </script>";
};
