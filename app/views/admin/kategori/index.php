<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="<?php echo base_url('?pagename=admin-kategori-add') ?>" class="btn btn-primary mb-3">Tambah Kategori</a>
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

                    <?php foreach($kategoris as $kategori) : ?>
                    <tr>
                        <td scope="row"><?php echo $kategori['nama_kategori'] ?></td>
                        <td width="180">
                            <a href="<?php echo base_url('?pagename=admin-kategori-edit&id=' . $kategori['id_kategori']) ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url('?pagename=admin-kategori-delete&id=' . $kategori['id_kategori']) ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>

                    <?php endforeach; ?>
 
                </tbody>
            </table>
        </div>
    </div>
</div>
