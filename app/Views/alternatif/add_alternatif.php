<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <div class="container-fluid mt-4">
        <h2>Tambah Alternatif</h2>
        <form action="<?= site_url('alternatif/create') ?>" method="post">
            <div class="form-group">
                <label for="kode_alternatif">Kode Alternatif</label>
                <input type="text" name="kode_alternatif" id="kode_alternatif" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama_alternatif">Nama Alternatif</label>
                <input type="text" name="nama_alternatif" id="nama_alternatif" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>

<?= $this->include('template/footer'); ?>
