<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Koperasi </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Riwayat Simpanan </li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                    Data Riwayat Simpanan 
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Simpanan Pokok</th>
                                            <th>Simpanan Wajib</th>
                                            <th>Simpanan Sukarela</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Username</th>
                                            <th>Simpanan Pokok</th>
                                            <th>Simpanan Wajib</th>
                                            <th>Simpanan Sukarela</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"select * from riwayat_simpanan order by id desc");
                                        while($data = mysqli_fetch_assoc($sql)){
                                    ?>
                                        <tr>
                                            <td> <?php echo convert_user($data['id_user']);?> </td>
                                            <td> <?php echo number_format($data['simpanan_pokok']);?> </td>
                                            <td> <?php echo number_format($data['simpanan_wajib']);?> </td>
                                            <td> <?php echo number_format($data['simpanan_sukarela']);?> </td>
                                            <td> <?php echo $data['created_at'];?> </td>
                                            <td> <a href="aksi.php?act=hapus_riwayat_simpanan&id=<?php echo $data['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus ??')"> Hapus </a> </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>