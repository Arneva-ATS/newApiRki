                <?php
                    if($_SESSION['status'] == 'koperasi'){
                ?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Koperasi </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Barang</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                    Data Barang | <a href="?menu=tambah_barang"> Tambah Barang </a>
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
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"select * from pos where id_koperasi = '".$_SESSION['id_koperasi']."' order by id desc");
                                        while($data = mysqli_fetch_assoc($sql)){
                                    ?>
                                        <tr>
                                            <td> <?php echo $data['kode_barang'];?> </td>
                                            <td> <?php echo $data['nama_barang'];?> </td>
                                            <td> <?php echo number_format($data['stok']);?> </td>
                                            <td> <?php echo number_format($data['harga']);?> </td>
                                            <td> <img src="<?php echo $data['photo'];?>" width="100"/> </td>
                                            <td> <?php echo convert_jenis_kategori($data['id_kategori']);?> </td>
                                            <td> <a href="aksi.php?act=hapus_barang&id=<?php echo $data['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus ??')"> Hapus </a> </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

                <?php        
                    }  if($_SESSION['status'] == 'anggota'){
                ?>

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Barang</li>
                        </ol>
                        <br>
                        <div class="row">
                            <?php 
                            $sql = mysqli_query($koneksi,"select * from pos where id_koperasi = '".$_SESSION['id_koperasi']."' order by id desc");
                            while($data = mysqli_fetch_assoc($sql)){
                            ?>
                            <div class="col-xl-4 col-md-6">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="<?php echo $data['photo'];?>" alt="<?php echo $data['nama_barang'];?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data['nama_barang'];?></h5>
                                    <p class="card-text"><?php echo substr($data['keterangan'],0,100);?>....</p>
                                    <a href="#" class="btn btn-warning">Update</a>
                                </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </main>

                <?php 
                    } if($_SESSION['status'] == 'rki'){
                ?>

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Koperasi </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Barang Rki </li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                    Data Barang Rki | <a href="?menu=tambah_barang"> Tambah Barang Rki</a>
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
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"select * from pos where flag = 'rki' order by id desc");
                                        while($data = mysqli_fetch_assoc($sql)){
                                    ?>
                                        <tr>
                                            <td> <?php echo $data['kode_barang'];?> </td>
                                            <td> <?php echo $data['nama_barang'];?> </td>
                                            <td> <?php echo number_format($data['stok']);?> </td>
                                            <td> <?php echo number_format($data['harga']);?> </td>
                                            <td> <img src="<?php echo $data['photo'];?>" width="100"/> </td>
                                            <td> <?php echo convert_jenis_kategori($data['id_kategori']);?> </td>
                                            <td> <a href="aksi.php?act=hapus_barang&id=<?php echo $data['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus ??')"> Hapus </a> </td>
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