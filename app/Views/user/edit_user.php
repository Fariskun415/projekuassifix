<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="container">
    <h2>Edit User</h2>
    <form action="<?= site_url('user/update/' . $user['id_user']) ?>" method="post">
        <div class="form-group">
            <label>Nama User</label>
            <input type="text" name="nama_user" class="form-control" value="<?= $user['nama_user'] ?>" required>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?= $user['username'] ?>" required>
        </div>
        <div class="form-group">
            <label>Level</label>
            <input type="text" name="level" class="form-control" value="<?= $user['level'] ?>" required>
        </div>
        <div class="form-group">
            <label>Status User</label>
            <input type="number" name="status_user" class="form-control" value="<?= $user['status_user'] ?>" min="0" max="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?= $this->include('template/footer'); ?>
