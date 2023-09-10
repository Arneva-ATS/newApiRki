<main>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-left font-weight-light my-4">Tambah Anggota</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="aksi.php?act=insert_anggota">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <?php if($_SESSION['status'] == 'rki'){ ?>
                                                        <select class="form-control" id="inputKodeKoperasi" type="text" name="kode_koperasi" placeholder="Enter Kode Koperasi" >
                                                            <option value='00'> Pilih Koperasi </option>
                                                            <?php
                                                                $sql = mysqli_query($koneksi,"select * from koperasi order by id asc");
                                                                while($data = mysqli_fetch_assoc($sql)){
                                                                    echo "<option value='".$data['id']."'>".$data['nama_koperasi']."</option>";
                                                                }
                                                                ?>
                                                        </select>
                                                        <label for="inputKodeKoperasi">Kode Koperasi</label>
                                                        <?php }else{ ?>
                                                            <input type="hidden" type="text" name="kode_koperasi" value="<?php echo $_SESSION['id_koperasi'];?>"> 
                                                            <input type="text" class="form-control" id="inputKodeKoperasi" type="text" value="<?php echo convert_koperasi($_SESSION['id_koperasi']);?>" disabled>
                                                            <label for="inputKodeKoperasi">Koperasi</label>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputNamaAnggota" type="text" name="nama_anggota" placeholder="Enter Nama Anggota" />
                                                        <label for="inputNamaAnggota">Nama Anggota</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputKodeAnggota" type="text" name="kode_anggota" value="<?php echo date("YmdHis");?>" placeholder="Enter Kode Anggota" />
                                                        <label for="inputKodeAnggota"> Kode Anggota </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputEmail" type="email" name="email" placeholder="Enter Email" />
                                                        <label for="inputEmail">Email</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputTelphone" type="text" name="telphon" placeholder="Enter Telphon" />
                                                        <label for="inputTelphone">Telphon</label>
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