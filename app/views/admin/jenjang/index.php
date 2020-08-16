<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="<?php echo base_url('?pagename=admin-jenjang-add') ?>" class="btn btn-primary mb-3">Tambah Jenjang</a>
                </div>
                <div></div>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach($jenjangs as $jenjang) : ?>
                    <tr>
                        <td scope="row"><?php echo $jenjang['nama_jenjang'] ?></td>
                        <td width="180">
                            <a href="<?php echo base_url('?pagename=admin-jenjang-edit&id=' . $jenjang['id_jenjang']) ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url('?pagename=admin-jenjang-delete&id=' . $jenjang['id_jenjang']) ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>

                    <?php endforeach; ?>
 
                </tbody>
            </table>
        </div>
    </div>
</div>
