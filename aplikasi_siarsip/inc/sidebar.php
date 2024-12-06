<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo BASE_URL;?>/pages/dashboard.php">SiArsip</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></div>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?php echo BASE_URL;?>/login.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="<?php echo BASE_URL;?>/pages/dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="<?php echo BASE_URL;?>/pages/arsip/arsip.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                                Arsip
                            </a>
                            <a class="nav-link" href="<?php echo BASE_URL;?>/pages/kategori/kategori.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                                Kategori
                            </a>
                            <a class="nav-link" href="<?php echo BASE_URL;?>/pages/users/users.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                User
                            </a>
                            <a class="nav-link" href="<?php echo BASE_URL;?>/pages/riwayat_unduh/riwayat_unduh.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-download"></i></div>
                                Riwayat Unduh
                            </a>
                            <a class="nav-link" href="<?php echo BASE_URL;?>/pages/ganti_password/ganti_password.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-lock"></i></div>
                                Ganti Password
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: Hamba</div>
                        SiArsip
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">