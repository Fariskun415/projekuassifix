<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <div class="container mt-4">
        <h2>Data Kriteria</h2>
        <a href="<?= site_url('kriteria/add') ?>" class="btn btn-primary mb-3">Tambah Kriteria</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Kode Kriteria</th>
                    <th>Nama Kriteria</th>
                    <th>Bobot</th>
                    <th>Atribut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kriterias as $kriteria): ?>
                    <tr>
                        <td><?= esc($kriteria['kode_kriteria']) ?></td>
                        <td><?= esc($kriteria['nama_kriteria']) ?></td>
                        <td><?= esc($kriteria['bobot']) ?></td>
                        <td><?= esc($kriteria['atribut']) ?></td>
                        <td>
                            <a href="<?= site_url('kriteria/edit/' . $kriteria['kode_kriteria']) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('kriteria/delete/' . $kriteria['kode_kriteria']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->include('template/footer'); ?>
