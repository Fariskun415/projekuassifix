<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Wrapper untuk form edit matriks keputusan -->
                <div class="col-md-8 offset-md-2">
                    <h1 class="font-weight-bold text-dark">Edit Matriks Keputusan</h1>
                    
                    <!-- Form edit matriks keputusan -->
                    <form action="<?= site_url('matrikskeputusan/update/' . $matrikskeputusan['kode_matriks']); ?>" method="post">
                        <?= csrf_field(); ?>

                        <div class="row">
                            <!-- Kode Alternatif -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kode_alternatif">Kode Alternatif</label>
                                    <select name="kode_alternatif" id="kode_alternatif" class="form-control" required>
                                        <option value="">Pilih Kode Alternatif</option>
                                        <?php foreach ($alternatif as $alt): ?>
                                            <option value="<?= $alt['kode_alternatif']; ?>" <?= $alt['kode_alternatif'] == old('kode_alternatif', $matrikskeputusan['kode_alternatif']) ? 'selected' : ''; ?>>
                                                <?= $alt['kode_alternatif']; ?> - <?= $alt['nama_alternatif']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Kode Kriteria -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kode_kriteria">Kode Kriteria</label>
                                    <select name="kode_kriteria" id="kode_kriteria" class="form-control" required>
                                        <option value="">Pilih Kode Kriteria</option>
                                        <?php foreach ($kriteria as $kri): ?>
                                            <option value="<?= $kri['kode_kriteria']; ?>" <?= $kri['kode_kriteria'] == old('kode_kriteria', $matrikskeputusan['kode_kriteria']) ? 'selected' : ''; ?>>
                                                <?= $kri['kode_kriteria']; ?> - <?= $kri['nama_kriteria']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Kode Periode -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kode_periode">Periode</label>
                                    <select name="kode_periode" id="kode_periode" class="form-control" required>
                                        <option value="">Pilih Periode</option>
                                        <?php foreach ($periode as $per): ?>
                                            <option value="<?= $per['kode_periode']; ?>" <?= $per['kode_periode'] == old('kode_periode', $matrikskeputusan['kode_periode']) ? 'selected' : ''; ?>>
                                                <?= $per['kode_periode']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Nilai -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nilai">Nilai</label>
                                    <input type="number" name="nilai" id="nilai" class="form-control" value="<?= old('nilai', $matrikskeputusan['nilai']); ?>" step="0.01" required>
                                </div>
                            </div>
                        </div>

                        <!-- Submit and Cancel Buttons -->
                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Perbarui</button>
                            <a href="<?= site_url('matrikskeputusan'); ?>" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->include('template/footer'); ?>

<!-- Custom CSS for styling -->
<style>
    /* Container styling */
    .container-fluid {
        max-width: 1200px;
        padding: 20px;
    }

    /* Form styling */
    .form-group label {
        font-size: 1rem;
        font-weight: bold;
        color: #343a40;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #ced4da;
        font-size: 0.8rem;
        padding: 10px;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    /* Button styles */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
        padding: 10px 20px;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }

    /* Layout for form (Grid system) */
    .row {
        margin-bottom: 15px;
    }

    /* Responsive design */
    @media (max-width: 767px) {
        .form-group label {
            font-size: 0.9rem;
        }

        .btn-primary, .btn-secondary {
            width: 100%;
            margin-top: 10px;
        }
    }
</style>
