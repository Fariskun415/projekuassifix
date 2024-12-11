<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="content-wrapper">
    <div class="container-fluid mt-4">
        <h2>Edit Alternatif</h2>
        <form action="<?= site_url('alternatif/update/' . $alternatif['kode_alternatif']) ?>" method="post">
            <div class="form-group">
                <label for="kode_alternatif">Kode Alternatif</label>
                <input type="text" name="kode_alternatif" id="kode_alternatif" class="form-control" value="<?= esc($alternatif['kode_alternatif']) ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama_alternatif">Nama Alternatif</label>
                <input type="text" name="nama_alternatif" id="nama_alternatif" class="form-control" value="<?= esc($alternatif['nama_alternatif']) ?>" required>
            </div>
            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?= esc($alternatif['no_hp']) ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<?= $this->include('template/footer'); ?>
