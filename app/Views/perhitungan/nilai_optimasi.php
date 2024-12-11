<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold text-dark">Data Optimasi</h1>

                    <!-- Dropdown untuk memilih periode -->
                    <form action="<?= site_url('perhitungan/nilaiOptimasi'); ?>" method="get">
                        <div class="form-group">
                            <label for="periode">Pilih Periode</label>
                            <select class="form-control" id="periode" name="periode" onchange="this.form.submit()">
                                <option value="">-- Pilih Periode --</option>
                                <?php foreach ($periodeList as $periode): ?>
                                    <option value="<?= $periode['kode_periode']; ?>" 
                                        <?= ($selectedPeriode == $periode['kode_periode']) ? 'selected' : ''; ?>>
                                        <?= $periode['tanggal']; ?> (<?= $periode['kode_periode']; ?>)
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </form>

                    <!-- Menampilkan tabel hanya jika periode dipilih -->
                    <?php if (!empty($optimasi)): ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Alternatif</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                    <th>C5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($optimasi as $row): ?>
                                    <tr>
                                        <td><?= $row['kode_alternatif']; ?></td>
                                        <td><?= number_format($row['optimasi_penjualan'], 5); ?></td>
                                        <td><?= number_format($row['optimasi_absensi'], 5); ?></td>
                                        <td><?= number_format($row['optimasi_kedisiplinan'], 5); ?></td>
                                        <td><?= number_format($row['optimasi_skill'], 5); ?></td>
                                        <td><?= number_format($row['optimasi_kerjasama_tim'], 5); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <p class="text-center">Data optimasi tidak tersedia untuk periode ini.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->include('template/footer'); ?>
