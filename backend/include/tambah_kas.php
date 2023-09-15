                <?php
                    $a = mysqli_query($koneksi, "SELECT max(id) as kode FROM kas");
                    $b = mysqli_fetch_array($a);
                    $nopin = $b['kode'] + 1;
                    $hasil = sprintf("%06s", $nopin);
                ?>                
                <main>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-left font-weight-light my-4">Tambah Kas</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="aksi.php?act=insert_kas" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputKodeTransaksi" type="text" name="kode_trx" value="<?php echo "TRX_".$hasil; ?>" placeholder="Enter Kode Transaksi" />
                                                        <label for="inputKodeTransaksi">Kode Transaksi</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputTanggal" type="date" name="tanggal" placeholder="Enter Tanggal" />
                                                        <label for="inputTanggal">Tanggal</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-control" id="inputJenisKas" name="jenis_kas" value="" placeholder="Jenis Kas">
                                                                <option value=""> Pilih Jenis Kas</option>
                                                                <option value="kas_masuk"> Kas Masuk </option>
                                                                <option value="kas_keluar"> Kas Keluar </option>
                                                        </select>
                                                        <label for="inputJenisKas"> Jenis Kas </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputKasMasuk" type="number" name="kas_masuk" placeholder="Enter Kas Masuk" />
                                                        <label for="inputAlamat">Kas Masuk</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputKasKeluar" type="number" name="kas_keluar" placeholder="Enter Kas Keluar" />
                                                        <label for="inputAlamat">Kas Keluar</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputKoperasi" type="text" name="id_koperasi" value="<?php echo $_SESSION['id_koperasi'];?>" placeholder="Enter Id Koperasi" readonly/>
                                                        <label for="inputKoperasi">Koperasi</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <select class="form-control" id="inputAnggota" type="text" name="id_user">
                                                                <option value="--"> Pilih Anggota </option>
                                                                <?php $qq = mysqli_query($koneksi,"select * from anggota where id_koperasi = '".$_SESSION['id_koperasi']."'"); while($data = mysqli_fetch_array($qq)){?>
                                                                <option value="<?php echo $data['kode_anggota'].'-'.$data['telphon'];?>"> <?php echo $data['nama_anggota'] .'-'.$data['kode_anggota'];  ?> </option>
                                                                <?php } ?>
                                                        </select>
                                                        <label for="inputAnggota">Anggota</label>
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