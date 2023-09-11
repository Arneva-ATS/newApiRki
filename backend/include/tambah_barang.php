                <?php
                    if($_SESSION['status'] == 'koperasi'){
                        
                    $a = mysqli_query($koneksi, "SELECT max(id) as kode FROM pos");
                    $b = mysqli_fetch_array($a);
                    $nopin = $b['kode'] + 1;
                    $hasil = sprintf("%05s", $nopin);
                ?>

                <main>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-left font-weight-light my-4">Tambah Barang</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="aksi.php?act=insert_barang" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputKodeKoperasi" type="text" name="kode_barang" value="<?php echo "BRG_".$hasil; ?>" placeholder="Enter Kode Koperasi" />
                                                        <label for="inputKodeKoperasi">Kode Barang</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputNamaBarang" type="text" name="nama_barang" placeholder="Enter Nama Barang" />
                                                        <label for="inputNamaKoperasi">Nama Barang</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputStok" type="number" name="stok" placeholder="Enter Stok" />
                                                        <label for="inputStok"> Stok </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputHarga" type="number" name="harga" placeholder="Enter Harga" />
                                                        <label for="inputHarga">Harga</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPhoto" type="file" name="photo" placeholder="Enter Photo" />
                                                        <label for="inputPhoto">Photo</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputKeterangan" type="text" name="keterangan" placeholder="Keterangan" />
                                                        <label for="inputKeterangan"> Keterangan </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-control" id="inputKategori" type="text" name="id_kategori" placeholder="Id Kategori" >
                                                            <option value="00"> Pilih Kategori</option>
                                                            <?php 
                                                                $sql = mysqli_query($koneksi,"select * from kategori");
                                                                while($data = mysqli_fetch_array($sql)){
                                                             ?>
                                                            <option value="<?php echo $data['id'];?>"> <?php echo $data['nama_kategori'];?> </option>
                                                            <?php } ?>
                                                        </select>
                                                        <label for="inputKategori"> Kategori </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputIDKoperasi" type="text" name="id_koperasi" value="<?php echo $_SESSION['id_koperasi'];?>" placeholder="Enter ID Koperasi" />
                                                        <label for="inputIDKoperasi">ID Koperasi</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                               <button class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                <?php        
                    }  if($_SESSION['status'] == 'rki'){

                    $a = mysqli_query($koneksi, "SELECT max(id) as kode FROM pos");
                    $b = mysqli_fetch_array($a);
                    $nopin = $b['kode'] + 1;
                    $hasil = sprintf("%05s", $nopin);
                ?>


                <main>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-left font-weight-light my-4">Tambah Barang</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="aksi.php?act=insert_barang" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputKodeKoperasi" type="text" name="kode_barang" value="<?php echo "BRG_".$hasil; ?>" placeholder="Enter Kode Koperasi" />
                                                        <label for="inputKodeKoperasi">Kode Barang</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputNamaBarang" type="text" name="nama_barang" placeholder="Enter Nama Barang" />
                                                        <label for="inputNamaKoperasi">Nama Barang</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputStok" type="text" name="stok" placeholder="Enter Stok" />
                                                        <label for="inputStok"> Stok </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputHarga" type="text" name="harga" placeholder="Enter Harga" />
                                                        <label for="inputHarga">Harga</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPhoto" type="file" name="photo" placeholder="Enter Photo" />
                                                        <label for="inputPhoto">Photo</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputKeterangan" type="text" name="keterangan" placeholder="Keterangan" />
                                                        <label for="inputKeterangan"> Keterangan </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-control" id="inputKategori" type="text" name="id_kategori" placeholder="Id Kategori" >
                                                            <option value="00"> Pilih Kategori</option>
                                                            <?php 
                                                                $sql = mysqli_query($koneksi,"select * from kategori");
                                                                while($data = mysqli_fetch_array($sql)){
                                                             ?>
                                                            <option value="<?php echo $data['id'];?>"> <?php echo $data['nama_kategori'];?> </option>
                                                            <?php } ?>
                                                        </select>
                                                        <label for="inputKategori"> Kategori </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                               <button class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </main>


                <?php 
                    } 
                ?>
