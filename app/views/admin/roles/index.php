<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <div>
                    <!-- <a href="<?php echo base_url('?pagename=admin-roles-add') ?>" class="btn btn-primary mb-3">Tambah Role</a> -->
                </div>
                <div></div>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <!-- <th>Aksi</th> -->
                    </tr>
                </thead>
                <tbody>

                    <?php foreach($roles as $role) : ?>
                    <tr>
                        <td scope="row"><?php echo $role['nama_role'] ?></td>
                        <!-- <td width="180">
                            <a href="<?php echo base_url('?pagename=admin-roles-edit&id=' . $role['id_role']) ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url('?pagename=admin-roles-delete&id=' . $role['id_role']) ?>" class="btn btn-danger">Hapus</a>
                        </td> -->
                    </tr>

                    <?php endforeach; ?>
 
                </tbody>
            </table>
        </div>
    </div>
</div>
