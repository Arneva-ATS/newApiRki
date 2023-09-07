<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Koperasi </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Anggota</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                    Data Anggota | <a href="?menu=tambah_anggota"> Tambah Anggota </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kode Koperasi</th>
                                            <th>Nama Anggota</th>
                                            <th>Kode Anggota</th>
                                            <th>Email</th>
                                            <th>Telphon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Kode Koperasi</th>
                                            <th>Nama Anggota</th>
                                            <th>Kode Anggota</th>
                                            <th>Email</th>
                                            <th>Telphon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"select * from anggota order by id desc");
                                        while($data = mysqli_fetch_assoc($sql)){
                                    ?>
                                        <tr>
                                            <td> <?php echo $data['id_koperasi'];?> </td>
                                            <td> <?php echo $data['nama_anggota'];?> </td>
                                            <td> <?php echo $data['kode_anggota'];?> </td>
                                            <td> <?php echo $data['email'];?> </td>
                                            <td> <?php echo $data['telphon'];?> </td>
                                            <td> <a href="aksi.php?act=hapus_anggota&id=<?php echo $data['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus ??')"> Hapus </a> </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>