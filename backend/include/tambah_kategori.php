                <?php
                    $a = mysqli_query($koneksi, "SELECT max(id) as kode FROM kategori");
                    $b = mysqli_fetch_array($a);
                    $nopin = $b['kode'] + 1;
                    $hasil = sprintf("%06s", $nopin);
                ?>       

                <main>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-left font-weight-light my-4">Tambah Kategori</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="aksi.php?act=insert_kategori_barang" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputKodeKategori" type="text" name="kode_kategori" value="KD_<?php echo $hasil;?>" placeholder="Enter Kode Kategori" />
                                                        <label for="inputKodeKategori">Kode Kategori</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputNamaKategopi" type="text" name="nama_kategori" placeholder="Enter Nama Kategori" />
                                                        <label for="inputNamaKategopi">Nama Kategori</label>
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