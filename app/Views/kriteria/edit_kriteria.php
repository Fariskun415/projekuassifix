<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <div class="container mt-4">
        <h2>Edit Kriteria</h2>
        <form action="<?= site_url('kriteria/update/' . $kriteria['kode_kriteria']) ?>" method="post">
            <div class="form-group">
                <label>Kode Kriteria</label>
                <input type="text" name="kode_kriteria" class="form-control" value="<?= esc($kriteria['kode_kriteria']) ?>" readonly>
            </div>
            <div class="form-group">
                <label>Nama Kriteria</label>
                <input type="text" name="nama_kriteria" class="form-control" value="<?= esc($kriteria['nama_kriteria']) ?>" required>
            </div>
            <div class="form-group">
                <label>Bobot</label>
                <input type="number" step="0.01" name="bobot" class="form-control" value="<?= esc($kriteria['bobot']) ?>" required>
            </div>
            <div class="form-group">
                <label>Atribut</label>
                <select name="atribut" class="form-control" required>
                    <option value="benefit" <?= $kriteria['atribut'] === 'benefit' ? 'selected' : '' ?>>Benefit</option>
                    <option value="cost" <?= $kriteria['atribut'] === 'cost' ? 'selected' : '' ?>>Cost</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<?= $this->include('template/footer'); ?>
