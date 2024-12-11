<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
        <h2>Data Subkriteria</h2>
        <a href="<?= site_url('subkriteria/add') ?>" class="btn btn-primary mb-3">Tambah Subkriteria</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode Subkriteria</th>
                    <th>Kode Kriteria</th>
                    <th>Nama Subkriteria</th>
                    <th>Bobot</th>
                    <th>Batas Min</th>
                    <th>Batas Max</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subkriterias as $subkriteria): ?>
                    <tr>
                        <td><?= esc($subkriteria['kode_subkriteria']) ?></td>
                        <td><?= esc($subkriteria['kode_kriteria']) ?></td>
                        <td><?= esc($subkriteria['nama_subkriteria']) ?></td>
                        <td><?= esc($subkriteria['bobot']) ?></td>
                        <td><?= esc($subkriteria['batas_min']) ?></td>
                        <td><?= esc($subkriteria['batas_max']) ?></td>
                        <td>
                            <a href="<?= site_url('subkriteria/edit/'.$subkriteria['kode_subkriteria']) ?>" class="btn btn-warning">Edit</a>
                            <a href="<?= site_url('subkriteria/delete/'.$subkriteria['kode_subkriteria']) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->include('template/footer'); ?>
