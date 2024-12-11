<!-- views/periode/view_periode.php -->
<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <div class="container mt-4">
        <h2>Data Periode</h2>
        <a href="<?= site_url('periode/add') ?>" class="btn btn-primary mb-3">Tambah Periode</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode Periode</th>
                    <th>Tanggal</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($periodes as $periode): ?>
                    <tr>
                        <td><?= $periode['kode_periode'] ?></td>
                        <td><?= $periode['tanggal'] ?></td>
                        <td>
                            <a href="<?= site_url('periode/edit/' . $periode['kode_periode']) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('periode/delete/' . $periode['kode_periode']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            <?= $pager->links() ?>
        </div>
    </div>
</div>

<?= $this->include('template/footer'); ?>
