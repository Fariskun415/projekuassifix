<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="content-wrapper" style="margin-left: 250px; padding: 20px;"> <!-- Adjusting margin for left navbar -->
    <h2>Matriks Keputusan</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Alternatif</th>
                <th>Penjualan</th>
                <th>Absensi</th>
                <th>Kedisiplinan</th>
                <th>Skill</th>
                <th>Kerjasama Tim</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matrix_keputusan as $row): ?>
            <tr>
                <td><?= $row->kode_alternatif ?></td>
                <td><?= $row->penjualan ?></td>
                <td><?= $row->absensi ?></td>
                <td><?= $row->kedisiplinan ?></td>
                <td><?= $row->skill ?></td>
                <td><?= $row->kerjasama_tim ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->include('template/footer'); ?>
