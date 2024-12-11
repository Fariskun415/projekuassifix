<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <div class="container-fluid mt-4">
        <h2>Data Alternatif (Sales)</h2>

        <a href="<?= site_url('alternatif/add') ?>" class="btn btn-primary mb-3">Tambah Alternatif</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Kode Alternatif</th>
                    <th>Nama Alternatif</th>
                    <th>No HP</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alternatifs as $alternatif): ?>
                    <tr>
                        <td><?= esc($alternatif['kode_alternatif']) ?></td>
                        <td><?= esc($alternatif['nama_alternatif']) ?></td>
                        <td><?= esc($alternatif['no_hp']) ?></td>
                        <td>
                            <a href="<?= site_url('alternatif/edit/' . $alternatif['kode_alternatif']) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('alternatif/delete/' . $alternatif['kode_alternatif']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->include('template/footer'); ?>
