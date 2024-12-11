<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar MOORA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Custom Sidebar */
        .custom-sidebar {
            background: linear-gradient(135deg, #6A89CC, #00A8FF);
            padding-top: 10px;
            width: 250px;
            position: fixed;
            height: 100vh;
        }

        .brand-link {
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.3);
            padding: 20px;
            text-decoration: none;
        }

        .brand-image {
            border-radius: 50%;
            border: 2px solid #ffffff;
            width: 50px;
            height: 50px;
        }

        .brand-text {
            font-size: 1.2rem;
            font-weight: bold;
            color: #ffffff !important;
            margin-left: 10px;
        }

        /* Custom Sidebar Links */
        .custom-nav-link {
            color: #ffffff !important;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 10px;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .custom-nav-link i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .custom-nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
            color: #00A8FF !important;
            border-radius: 5px;
        }

        .nav-sidebar .nav-item .nav-link {
            color: #ffffff;
        }

        .nav-sidebar .nav-item .nav-link .nav-icon {
            color: #ffffff;
        }

        .nav-sidebar .nav-item.has-treeview > a::after {
            color: #ffffff;
        }

        /* Submenu styling */
        .custom-submenu {
            padding-left: 20px;
        }

        .custom-submenu .nav-link {
            color: #E3F2FD !important;
            font-size: 0.9rem;
            text-decoration: none;
            display: block;
            padding: 8px 10px;
        }

        .custom-submenu .nav-link:hover {
            background: rgba(0, 168, 255, 0.3);
            color: #ffffff !important;
            border-radius: 3px;
        }

        /* Active Link Styling */
        .nav-item .nav-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            color: #00A8FF !important;
        }

        /* Transition Effect */
        .nav-link,
        .custom-submenu .nav-link {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar custom-sidebar elevation-4">
        <!-- Brand Logo -->
        <a href="<?= base_url('/') ?>" class="brand-link">
            <img src="<?= base_url('assets/dist/img/logo_uin.png') ?>" alt="Apps Logo" class="brand-image img-circle elevation-3">
            <span class="brand-text">MOORA</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    
                    <!-- Home Link -->
                    <li class="nav-item">
                        <a href="<?= site_url('/') ?>" class="nav-link custom-nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Home</p>
                        </a>
                    </li>

                    <!-- Master Data -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link custom-nav-link">
                            <i class="nav-icon fas fa-database"></i>
                            <p>Master Data <i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview custom-submenu">
                            <li class="nav-item">
                                <a href="<?= site_url('periode') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-calendar-alt"></i>
                                    <p>Data Periode</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('alternatif') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>Data Alternatif (Sales)</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('kriteria') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-tasks"></i>
                                    <p>Data Kriteria</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('subkriteria') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>Data Subkriteria</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Perhitungan -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link custom-nav-link">
                            <i class="nav-icon fas fa-calculator"></i>
                            <p>Perhitungan <i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview custom-submenu">
                            <li class="nav-item">
                                <a href="<?= site_url('matrikskeputusan') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-pencil-alt"></i>
                                    <p>Matriks Keputusan</p>
                                </a>
                            </li>
    
                            <li class="nav-item">
                                <a href="<?= site_url('perhitungan/normalisasi') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-chart-line"></i>
                                    <p>Normalisasi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('perhitungan/nilaiOptimasi') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-chart-bar"></i>
                                    <p>Nilai Optimasi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('perhitungan/nilaiPreferensi') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-trophy"></i>
                                    <p>Nilai Preferensi & Rangking</p>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

</body>
</html>
