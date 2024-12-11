<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
        <h2>Tambah Subkriteria</h2>
        <form action="<?= site_url('subkriteria/create') ?>" method="post">
            <div class="form-group">
                <label>Kode Subkriteria</label>
                <input type="text" name="kode_subkriteria" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Kode Kriteria</label>
                <select name="kode_kriteria" class="form-control" required>
                    <?php foreach ($kriterias as $kriteria): ?>
                        <option value="<?= $kriteria['kode_kriteria'] ?>"><?= $kriteria['nama_kriteria'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Nama Subkriteria</label>
                <input type="text" name="nama_subkriteria" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Bobot</label>
                <input type="text" name="bobot" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Batas Min</label>
                <input type="number" name="batas_min" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Batas Max</label>
                <input type="number" name="batas_max" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<?= $this->include('template/footer'); ?>
