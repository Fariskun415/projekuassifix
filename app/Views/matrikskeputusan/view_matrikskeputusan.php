<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Matriks Keputusan</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="<?= site_url('matrikskeputusan/create') ?>" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
        <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Matriks</th>
            <th>Kode Alternatif</th>
            <th>Kode Kriteria</th>
            <th>Kode Periode</th>
            <th>Nilai</th>
            
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($matriksKeputusan)): ?>
            <?php $no = 1; ?>
            <?php foreach ($matriksKeputusan as $row): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['kode_matriks']; ?></td>
                    <td><?= $row['kode_alternatif']; ?></td>
                    <td><?= $row['kode_kriteria']; ?></td>
                    <td><?= $row['kode_periode']; ?></td>
                    <td><?= $row['nilai']; ?></td>
                    
                    <td>
                        <a href="<?= site_url('matrikskeputusan/edit/' . $row['kode_matriks']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= site_url('matrikskeputusan/delete/' . $row['kode_matriks']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="9" class="text-center">Data tidak tersedia</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

        </div>
    </section>
</div>

<?= $this->include('template/footer'); ?>
