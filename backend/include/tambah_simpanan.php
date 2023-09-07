<main>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-left font-weight-light my-4">Tambah Koperasi</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="aksi.php?act=insert_koperasi">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputKodeKoperasi" type="text" name="kode_koperasi" placeholder="Enter Kode Koperasi" />
                                                        <label for="inputKodeKoperasi">Kode Koperasi</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputNamaKoperasi" type="text" name="nama_koperasi" placeholder="Enter Nama Koperasi" />
                                                        <label for="inputNamaKoperasi">Nama Koperasi</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputEmail" type="text" name="email" placeholder="Enter email" />
                                                        <label for="inputEmail"> Email </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputAlamat" type="text" name="alamat" placeholder="Enter Alamat" />
                                                        <label for="inputAlamat">Alamat</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputMaps" type="text" name="maps" placeholder="Enter Maps" />
                                                        <label for="inputMaps">Maps</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputTelphon" type="text" name="telphon" placeholder="Enter Telphon" />
                                                        <label for="inputTelphon"> Telphon </label>
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