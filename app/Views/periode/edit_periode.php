<!-- views/periode/edit_periode.php -->
<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <div class="container mt-4">
        <h2 class="mb-4">Edit Periode</h2>

        <!-- Tampilkan pesan kesalahan jika ada -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('periode/update/' . $periode['kode_periode']) ?>" method="post">
            <?= csrf_field(); ?>

            <div class="mb-3">
                <label for="kode_periode" class="form-label">Kode Periode</label>
                <input type="text" name="kode_periode" id="kode_periode" class="form-control" 
                       value="<?= old('kode_periode', $periode['kode_periode']) ?>" readonly>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal (format: YYYY/MM/DD)</label>
                <input type="text" name="tanggal" id="tanggal" class="form-control" 
                       value="<?= old('tanggal', $periode['tanggal']) ?>" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
            <a href="<?= site_url('periode') ?>" class="btn btn-secondary mt-3">Kembali</a>
        </form>
    </div>
</div>

<?= $this->include('template/footer'); ?>
