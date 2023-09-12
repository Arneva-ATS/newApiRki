            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <?php 
                    if($_SESSION['status'] == 'anggota'){
                    ?>
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <div class="sb-sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a>
                                <div class="sb-sidenav-menu-heading">Interface</div>
                              
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBarang" aria-expanded="false" aria-controls="collapseBarang">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Barang
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseBarang" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="?menu=barang">Barang</a>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSimpin" aria-expanded="false" aria-controls="collapseSimpin">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Simpanan
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseSimpin" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="?menu=simpanan">Data Simpanan</a>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePinjaman" aria-expanded="false" aria-controls="collapsePinjaman">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Pinjaman
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsePinjaman" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="?menu=pinjaman">Data Pinjaman</a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <?php } if($_SESSION['status'] == 'koperasi') { ?>

                            <div class="sb-sidenav-menu">
                            <div class="nav">
                                <div class="sb-sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a>
                                <div class="sb-sidenav-menu-heading">Interface</div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Masters
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="?menu=anggota">Anggota</a>
                                        <a class="nav-link" href="?menu=toko">Toko</a>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSimpin" aria-expanded="false" aria-controls="collapseSimpin">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Simpanan
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseSimpin" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="?menu=simpanan">Data Simpanan</a>
                                        <a class="nav-link" href="?menu=histori_simpanan">Histori Simpanan</a>
                                        <a class="nav-link" href="?menu=summari_simpanan">Summari Simpanan</a>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePinjaman" aria-expanded="false" aria-controls="collapsePinjaman">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Pinjaman
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsePinjaman" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="?menu=pinjaman">Data Pinjaman</a>
                                        <a class="nav-link" href="?menu=histori_peminjaman">Histori Pinjaman</a>
                                        <a class="nav-link" href="?menu=summari_pinjaman">Summari Pinjaman</a>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBarang" aria-expanded="false" aria-controls="collapseBarang">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Barang
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseBarang" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="?menu=barang">Barang</a>
                                        <a class="nav-link" href="?menu=kategori_barang">Kategori Barang</a>
                                    </nav>
                                </div>

                            </div>
                        </div>

                        <?php } if ($_SESSION['status'] == 'rki') { ?>

                            <div class="sb-sidenav-menu">
                            <div class="nav">
                                <div class="sb-sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a>
                                <div class="sb-sidenav-menu-heading">Interface</div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Masters
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="?menu=koperasi">Koperasi</a>
                                        <a class="nav-link" href="?menu=barang">Barang</a>
                                    </nav>
                                </div>

                            </div>
                        </div>

                        <?php } ?>

                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['username']; ?>
                    </div>
                </nav>
            </div>