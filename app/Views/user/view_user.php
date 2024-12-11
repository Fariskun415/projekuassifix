<?= $this->include('template/header'); ?>
<?= $this->include('template/nav'); ?>

<div class="container">
    <h2>Data User</h2>
    <a href="<?= site_url('user/add') ?>" class="btn btn-primary mb-3">Tambah User</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama User</th>
                <th>Username</th>
                <th>Level</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['nama_user'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['level'] ?></td>
                    <td><?= $user['status_user'] ? 'Active' : 'Inactive' ?></td>
                    <td>
                        <a href="<?= site_url('user/edit/' . $user['id_user']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= site_url('user/delete/' . $user['id_user']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->include('template/footer'); ?>
