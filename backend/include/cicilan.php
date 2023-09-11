                <?php 
                    $sql = mysqli_query($koneksi,"select * from pinjaman where id = '".$_GET['id']."'");
                    $data = mysqli_fetch_assoc($sql);
                    $potong = substr($data['tanggal'],0,10);
                    $tgl = explode("-",$potong);
                    $tempo = mktime(0, 0, 0, date($tgl[1])+$data['lama_angsuran'], date($tgl[2]), date($tgl[0]));
                    $bulanan = floor($data['jumlah_pinjaman']/$data['lama_angsuran']);
                    $format_ok =  number_format($bulanan,0,",",".");
                ?>

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Koperasi </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Detail Pinjaman</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                    Detail Pinjaman : 
                            </div>
                                <h3> Jatuh Tempo: <?php echo date('Y-m-d',$tempo); ?> </h3>
                                <h3> Bayar Bulanan : Rp.<?php echo $format_ok; ?> </h3>

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
                                        <tr>
                                            <td> <?php echo convert_user($data['id_user']);?> </td>
                                            <td> <?php echo number_format($data['jumlah_pinjaman']);?> </td>
                                            <td> <?php echo convert_jenis_pinjaman($data['jenis_pinjaman']);?> </td>
                                            <td> <?php echo number_format($data['lama_angsuran']);?> </td>
                                            <td> <?php echo $data['keterangan'];?> </td>
                                            <td> <?php echo $data['tanggal'];?> </td>
                                            <td> <?php echo $data['approve'];?> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

                
     

                           

                    