<!-- views/periode/add_periode.php -->
    <?= $this->include('template/header'); ?>
    <?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <div class="container mt-4">
        <h2>Tambah Periode</h2>
        <form action="<?= site_url('periode/create') ?>" method="post">
            <div class="form-group">
                <label for="kode_periode">Kode Periode</label>
                <input type="text" name="kode_periode" id="kode_periode" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
</div>

    <?= $this->include('template/footer'); ?>
