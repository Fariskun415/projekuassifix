<!-- app/Views/home.php -->
<?= $this->include('template/header'); ?>

<!-- Sidebar (Optional) -->
<?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h1 class="text-dark font-weight-bold">Welcome to SPK Pemilihan Sales Terbaik</h1>
                    <p class="lead text-muted">Sistem Pendukung Keputusan untuk memilih Sales terbaik berdasarkan kriteria yang relevan.</p>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>" class="text-primary">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- Periode -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-primary text-white rounded shadow-sm">
                        <div class="inner">
                            <h3 class="font-weight-bold"><?= $periode_count; ?></h3>
                            <p class="text-light">Data Periode</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-calendar"></i>
                        </div>
                        <a href="<?= site_url('periode') ?>" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- Alternatif (Sales) -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-success text-white rounded shadow-sm">
                        <div class="inner">
                            <h3 class="font-weight-bold"><?= $alternatif_count; ?></h3>
                            <p class="text-light">Data Alternatif (Sales)</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="<?= site_url('alternatif') ?>" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- Kriteria -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-warning text-dark rounded shadow-sm">
                        <div class="inner">
                            <h3 class="font-weight-bold"><?= $kriteria_count; ?></h3>
                            <p class="text-dark">Data Kriteria</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?= site_url('kriteria') ?>" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- Subkriteria -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-danger text-white rounded shadow-sm">
                        <div class="inner">
                            <h3 class="font-weight-bold"><?= $subkriteria_count; ?></h3>
                            <p class="text-light">Data Subkriteria</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="<?= site_url('subkriteria') ?>" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- CSS untuk mempercantik halaman -->
<style>
    /* Kontainer untuk seluruh halaman */
    .content-wrapper {
        background-color: #f4f6f9;
        padding: 30px;
    }

    /* Judul halaman */
    .content-header h1 {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
    }

    .content-header .breadcrumb {
        background-color: transparent;
        padding: 5px 0;
    }

    .breadcrumb-item a {
        color: #007bff;
    }

    .breadcrumb-item.active {
        color: #6c757d;
    }

    /* Kotak statistik */
    .small-box {
        border-radius: 10px;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
        padding: 20px;
    }

    .small-box .inner {
        padding: 10px;
    }

    .small-box .icon {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 50px;
        opacity: 0.15;
    }

    /* Gaya tombol footer */
    .small-box-footer {
        display: block;
        padding: 10px;
        text-align: center;
        font-size: 1.2rem;
        background: rgba(0, 0, 0, 0.1);
        color: inherit;
        transition: background-color 0.3s;
    }

    .small-box-footer:hover {
        background: rgba(0, 0, 0, 0.2);
    }

    /* Warna gradient */
    .bg-gradient-primary {
        background: linear-gradient(45deg, #007bff, #0056b3);
    }

    .bg-gradient-success {
        background: linear-gradient(45deg, #28a745, #218838);
    }

    .bg-gradient-warning {
        background: linear-gradient(45deg, #ffc107, #e0a800);
    }

    .bg-gradient-danger {
        background: linear-gradient(45deg, #dc3545, #c82333);
    }

    /* Ikon kotak statistik */
    .ion {
        font-size: 30px;
    }

    /* Teks dalam kotak */
    .small-box .inner h3 {
        font-size: 3rem;
        font-weight: bold;
        color: #fff;
    }

    .small-box .inner p {
        font-size: 1.2rem;
        color: #fff;
    }

    /* Keterangan */
    .text-muted {
        font-size: 1.1rem;
        color: #6c757d;
    }

    .lead {
        font-size: 1.4rem;
    }
</style>

<?= $this->include('template/footer'); ?>
