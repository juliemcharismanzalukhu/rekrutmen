<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="<?php echo base_url('?pagename=admin-role-add') ?>" class="btn btn-primary mb-3">Tambah Data</a>
                </div>
                <div></div>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach($users as $user) : ?>
                    <tr>
                        <td scope="row"><?php echo $user['nama_lengkap'] ?></td>
                        <td><?php echo $user['user_name'] ?></td>
                        <td><?php echo $user['user_mail'] ?></td>
                        <td>
                            <a href="<?php echo base_url('?pagename=admin-user-edit&id=' . $user['id_user']) ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url('?pagename=admin-user-delete&id=' . $user['id_user']) ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>

                    <?php endforeach; ?>
 
                </tbody>
            </table>
        </div>
    </div>
</div>
