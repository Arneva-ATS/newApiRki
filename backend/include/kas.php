<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Koperasi </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Kas Masuk</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                    Data Kas Masuk | <a href="?menu=tambah_anggota"> Tambah Kas Masuk </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kode_TRX</th>
                                            <th>Tanggal</th>
                                            <th>Jenis Kas</th>
                                            <th>Kas Masuk</th>
                                            <th>Kas Keluar</th>
                                            <th>Nomimal</th>
                                            <th>Koperasi</th>
                                            <th>User</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Kode_TRX</th>
                                            <th>Tanggal</th>
                                            <th>Jenis Kas</th>
                                            <th>Kas Masuk</th>
                                            <th>Kas Keluar</th>
                                            <th>Nomimal</th>
                                            <th>Koperasi</th>
                                            <th>User</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"select * from kas order by id desc");
                                        while($data = mysqli_fetch_assoc($sql)){
                                    ?>
                                        <tr>
                                            <td> <?php echo $data['kode_trx'];?> </td>
                                            <td> <?php echo $data['tanggal'];?> </td>
                                            <td> <?php echo $data['jenis_kas'];?> </td>
                                            <td> <?php echo $data['kas_masuk'];?> </td>
                                            <td> <?php echo $data['kas_keluar'];?> </td>
                                            <td> <?php echo $data['nominal'];?> </td>
                                            <td> <?php echo $data['id_koperasi'];?> </td>
                                            <td> <?php echo $data['id_user'];?> </td>
                                            <td> ## </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>