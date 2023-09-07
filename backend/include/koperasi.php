                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Koperasi </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Koperasi</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                    Data Koperasi | <a href="?menu=tambah_koperasi"> Tambah Koperasi </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kode Koperasi</th>
                                            <th>Nama Koperasi</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Maps</th>
                                            <th>Telphon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Kode Koperasi</th>
                                            <th>Nama Koperasi</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Maps</th>
                                            <th>Telphon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"select * from koperasi order by id desc");
                                        while($data = mysqli_fetch_assoc($sql)){
                                    ?>
                                        <tr>
                                            <td> <?php echo $data['kode_koperasi'];?> </td>
                                            <td> <?php echo $data['nama_koperasi'];?> </td>
                                            <td> <?php echo $data['email'];?> </td>
                                            <td> <?php echo $data['alamat'];?> </td>
                                            <td> <?php echo $data['maps'];?> </td>
                                            <td> <?php echo $data['telphon'];?> </td>
                                            <td> <a href="aksi.php?act=hapus_koperasi&id=<?php echo $data['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus ??')"> Hapus </a> </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>