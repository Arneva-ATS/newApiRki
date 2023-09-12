

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Koperasi </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data TOKO </li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                    Data Toko | <a href="?menu=tambah_barang"> Tambah Toko</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kode Toko</th>
                                            <th>Nama Toko</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>User Login</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Kode Toko</th>
                                            <th>Nama Toko</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>User Login</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"select * from toko order by id desc");
                                        while($data = mysqli_fetch_assoc($sql)){
                                    ?>
                                        <tr>
                                            <td> <?php echo $data['kode_toko'];?> </td>
                                            <td> <?php echo $data['nama_toko'];?> </td>
                                            <td> <?php echo $data['email'];?> </td>
                                            <td> <?php echo $data['alamat'];?> </td>
                                            <td> <?php echo $data['id_user'];?> </td>
                                            <td> <a href="aksi.php?act=hapus_toko&id=<?php echo $data['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus ??')"> Hapus </a> </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

