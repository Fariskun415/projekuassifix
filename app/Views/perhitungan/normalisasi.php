<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold text-dark">Data Normalisasi</h1>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kode Alternatif</th>
                                <th>Kode Kriteria</th>
                                <th>Periode</th>
                                <th>Nilai</th>
                                <th>Nilai Normalisasi</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($normalisasi as $norm): ?>
                                <tr>
                                    <td><?= $norm['kode_alternatif']; ?></td>
                                    <td><?= $norm['kode_kriteria']; ?></td>
                                    <td><?= $norm['kode_periode']; ?></td>
                                    <td><?= number_format($norm['nilai'], 2); ?></td>
                                    <td><?= number_format($norm['normalisasi_nilai'], 4); ?></td>
                                    <td><?= number_format($norm['bobot'], 2); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->include('template/footer'); ?>
