                <?php
                 $a = mysqli_query($koneksi, "SELECT max(id) as kode FROM toko");
                 $b = mysqli_fetch_array($a);
                 $nopin = $b['kode'] + 1;
                 $hasil = sprintf("%06s", $nopin);
                ?>                
                <main>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-left font-weight-light my-4">Tambah Toko</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="aksi.php?act=insert_toko" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputKodeToko" type="text" name="kode_toko" value="<?php echo "TK_".$hasil; ?>" placeholder="Enter Kode Toko" />
                                                        <label for="inputKodeToko">Kode Toko</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputNamaToko" type="text" name="nama_toko" placeholder="Enter Nama Toko" />
                                                        <label for="inputNamaToko">Nama Toko</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputEmail" type="email" name="email" value="" placeholder="Enter Email" />
                                                        <label for="inputEmail"> Email </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputAlamat" type="text" name="alamat" placeholder="Enter Alamat" />
                                                        <label for="inputAlamat">Alamat</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputIdKoperasi" type="text" name="id_koperasi" value="<?php echo $_SESSION['id_koperasi'];?>" placeholder="Enter Id Koperasi" readonly/>
                                                        <label for="inputIdKoperasi">Koperasi</label>
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