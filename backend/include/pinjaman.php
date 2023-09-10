                <?php
                     if($_SESSION['status'] == 'koperasi'){
                ?>

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Koperasi </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Pinjaman</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                    Data Pinjaman
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Jumlah Pinjaman</th>
                                            <th>Jenis Pinjaman</th>
                                            <th>Lama Angsuran</th>
                                            <th>Keterangan</th>
                                            <th>Tanggal</th>
                                            <th>Approve</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Username</th>
                                            <th>Jumlah Pinjaman</th>
                                            <th>Jenis Pinjaman</th>
                                            <th>Lama Angsuran</th>
                                            <th>Keterangan</th>
                                            <th>Tanggal</th>
                                            <th>Approve</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"select * from pinjaman order by id desc");
                                        while($data = mysqli_fetch_assoc($sql)){
                                    ?>
                                        <tr>
                                            <td> <?php echo convert_user($data['id_user']);?> </td>
                                            <td> <?php echo number_format($data['jumlah_pinjaman']);?> </td>
                                            <td> <?php echo convert_jenis_pinjaman($data['jenis_pinjaman']);?> </td>
                                            <td> <?php echo number_format($data['lama_angsuran']);?> </td>
                                            <td> <?php echo $data['keterangan'];?> </td>
                                            <td> <?php echo $data['tanggal'];?> </td>
                                            <td> <?php echo $data['approve'];?> </td>
                                            <td> 
                                                <a href="aksi.php?act=approve_pinjaman&id=<?php echo $data['id'];?>" class="btn btn-warning" onclick="return confirm('Yakin Mau Di Approve ??')"> Approve </a>     
                                                <a href="aksi.php?act=hapus_pinjaman&id=<?php echo $data['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus ??')"> Hapus </a> `
                                            </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

                <?php
                    } if($_SESSION['status'] == 'anggota'){
                ?>

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Koperasi </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Pinjaman Anggota</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                    Data Pinjaman Anggota
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Jumlah Pinjaman</th>
                                            <th>Jenis Pinjaman</th>
                                            <th>Lama Angsuran</th>
                                            <th>Keterangan</th>
                                            <th>Tanggal</th>
                                            <th>Approve</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Username</th>
                                            <th>Jumlah Pinjaman</th>
                                            <th>Jenis Pinjaman</th>
                                            <th>Lama Angsuran</th>
                                            <th>Keterangan</th>
                                            <th>Tanggal</th>
                                            <th>Approve</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"select * from pinjaman where id_user = '".$_SESSION['id']."' order by id desc");
                                        while($data = mysqli_fetch_assoc($sql)){
                                    ?>
                                        <tr>
                                            <td> <?php echo convert_user($data['id_user']);?> </td>
                                            <td> <?php echo number_format($data['jumlah_pinjaman']);?> </td>
                                            <td> <?php echo convert_jenis_pinjaman($data['jenis_pinjaman']);?> </td>
                                            <td> <?php echo number_format($data['lama_angsuran']);?> </td>
                                            <td> <?php echo $data['keterangan'];?> </td>
                                            <td> <?php echo $data['tanggal'];?> </td>
                                            <td> <?php echo $data['approve'];?> </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

                <?php        
                    } 
                ?>
