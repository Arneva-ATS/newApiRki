<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Koperasi </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Pengguna</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                    Data Pengguna
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Password</th>
                                            <th>Token</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Password</th>
                                            <th>Token</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"select * from pengguna where id = '".$_SESSION['id']."'");
                                        $data = mysqli_fetch_assoc($sql);
                                    ?>
                                        <tr>
                                            <td> <?php echo $data['username'];?> </td>
                                            <td> <?php echo $data['nama'];?> </td>
                                            <td> <?php echo $data['password'];?> </td>
                                            <td> <?php echo $data['token'];?> </td>
                                            <td> <?php echo $data['status'];?> </td>
                                            <td> ## </td>
                                        </tr>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>