                <?php   $rows = mysqli_fetch_array(mysqli_query($koneksi,"select * from koperasi where id = '".$_SESSION['id_koperasi']."' asc")); ?>
                <main>  
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-left font-weight-light my-4">Tambah Simpanan</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="aksi.php?act=insert_simpanan">
                                            <input type='hidden' name='id_koperasi' value='<?php echo $_SESSION['id_koperasi'];?>'>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-control" id="inputKodeAnggota" type="text" name="kode_anggota" placeholder="Enter Kode Anggota">
                                                            <option value="00">Pilih Anggota </option>
                                                            <?php
                                                                $sql = mysqli_query($koneksi,"select * from anggota where  id_koperasi = '".$_SESSION['id_koperasi']."'");
                                                                while($data = mysqli_fetch_assoc($sql)){
                                                                    echo "<option value='".$data['kode_anggota']."'>".$data['nama_anggota']."</option>";
                                                                }
                                                                ?>
                                                        </select>
                                                        <label for="inputKodeAnggota">Anggota</label>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputSimjib" type="number" name="simpanan_wajib" placeholder="Enter Simpanan Wajib" />
                                                        <label for="inputSimjib"> Simpanan Wajib </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputSimkok" type="number" name="simpanan_pokok" placeholder="Enter Simpanan Pokok" />
                                                        <label for="inputSimkok">Simpanan Pokok</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputSimla" type="number" name="simpanan_sukarela" placeholder="Enter Simpanan Sukarela" />
                                                        <label for="inputSimla">Simpanan Sukarela</label>
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