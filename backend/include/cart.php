<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Koperasi </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Cart Barang</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                    Cart Barang 
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Stok</th>
                                            <th>Harga</th>
                                            <th>Photo</th>
                                            <th>Kategori</th>
                                            <th>Koperasi</th>
                                            <th>Jumlah</th>
                                            <th>SID</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Stok</th>
                                            <th>Harga</th>
                                            <th>Photo</th>
                                            <th>Kategori</th>
                                            <th>Koperasi</th>
                                            <th>Jumlah</th>
                                            <th>SID</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"select * from cart order by id desc");
                                        while($data = mysqli_fetch_assoc($sql)){
                                    ?>
                                        <tr>
                                            <td> <?php echo $data['kode_barang'];?> </td>
                                            <td> <?php echo $data['nama_barang'];?> </td>
                                            <td> <?php echo number_format($data['stok']);?> </td>
                                            <td> <?php echo number_format($data['harga']);?> </td>
                                            <td> <img src="<?php echo $data['photo'];?>" width="100"/> </td>
                                            <td> <?php echo convert_jenis_kategori($data['id_kategori']);?> </td>
                                            <td> <?php echo convert_koperasi($data['id_koperasi']);?> </td>
                                            <td> <?php echo $data['jumlah'];?> </td>
                                            <td> <?php echo $data['session_id'];?> </td>
                                            <td>
                                                <a href="aksi.php?act=hapus_cart&id=<?php echo $data['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus ??')"> Hapus </a> 
                                            </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>