<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="<?php echo base_url('?pagename=admin-loker-add') ?>" class="btn btn-primary mb-3">Tambah Lowongan</a>
                </div>
                <div></div>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nama </th>
                        <th>Deskripsi</th>
                        <th>Gaji </th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach($lokers as $loker) : ?>
                    <tr>
                        <td scope="row"><?php echo $loker['nama_loker'] ?></td>
                        <td><?php echo $loker['deskripsi_loker'] ?></td>
                        <td><?php echo $loker['gaji_loker'] ?></td>
                        <td><?php echo $loker['status_loker'] ?></td>
                        <td width="180">
                            <a href="<?php echo base_url('?pagename=admin-loker-edit&id=' . $loker['id_loker']) ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url('?pagename=admin-loker-delete&id=' . $loker['id_loker']) ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>

                    <?php endforeach; ?>
 
                </tbody>
            </table>
        </div>
    </div>
</div>
