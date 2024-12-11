<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold text-dark">Data Nilai Preferensi dan Peringkat</h1>
                    
                    <!-- Form untuk memilih periode -->
                    <form action="<?= site_url('perhitungan/nilaiPreferensi'); ?>" method="get">
                        <div class="form-group">
                            <label for="periode">Pilih Periode:</label>
                            <select name="periode" id="periode" class="form-control" onchange="this.form.submit()">
                                <?php foreach ($periodeList as $periode): ?>
                                    <option value="<?= $periode['kode_periode']; ?>" <?= isset($selectedPeriode) && $selectedPeriode == $periode['kode_periode'] ? 'selected' : ''; ?>>
                                        <?= 'Periode ' . substr($periode['kode_periode'], -1); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </form>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Alternatif</th>
                                <th>Total Nilai</th>
                                <th>Peringkat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($nilaiPreferensi)): ?>
                                <?php foreach ($nilaiPreferensi as $row): ?>
                                    <tr>
                                        <td><?= $row['kode_alternatif']; ?></td>
                                        <td><?= number_format($row['total_nilai'], 8); ?></td>
                                        <td><?= $row['rangking']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr><td colspan="3">Data tidak tersedia untuk periode yang dipilih.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->include('template/footer'); ?>
