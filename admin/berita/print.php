<table id="example" class="display text-center" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kategori</th>
                                        <th>Judul</th>
                                        <th>Tanggal Berita</th>
                                        <th>Isi Berita</th>
                                        <th>Gambar Berita</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    if(isset($_POST['filter'])){
                                        $query = mysqli_query($koneksi,"SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori WHERE tanggal BETWEEN '$_POST[dari]' AND '$_POST[sampai]' ORDER BY id_berita DESC");
                                    }else{
                                        $query = mysqli_query($koneksi, "SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori ORDER BY id_berita DESC");
                                    }
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?>.</td>
                                            <td><?= $data['nama_kategori'] ?></td>
                                            <td style="width:100px"><?php echo $data['judul'] ?></td>
                                            <td><?php echo date('d F Y', strtotime($data['tanggal'])) ?></td>
                                            <td style="width:200px"><?php echo $data['isi'] ?></td>
                                            <td><img src="../images/<?php echo $data['gambar'] ?>" alt="" style="width:120px;height:120px;"></td>
                                            <td>
                                                <a href="?page=berita/ubah&id_berita=<?= $data['id_berita'] ?>" style="background-color:green;padding:5px;color:white;border-radius:4px;text-decoration:none;"><i class="fa fa-edit m-1"></i>Ubah</a>
                                                <a href="?page=berita/proses-hapus&id_berita=<?= $data['id_berita'] ?>" style="background-color:red;padding:5px;color:white;border-radius:4px;text-decoration:none;" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="fa fa-trash m-1"></i>Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table>