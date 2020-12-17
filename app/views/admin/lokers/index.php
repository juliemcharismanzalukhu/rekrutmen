<?php 


$sess_id_user = isset($_SESSION['user']['id_user']) ? $_SESSION['user']['id_user'] : false;
$sess_role = isset($_SESSION['user']['nama_role']) ? $_SESSION['user']['nama_role'] : false;

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <?php if( $sess_role == 'HCE' ) : ?>
                <div>
                    <a href="<?php echo base_url('?pagename=admin-loker-add') ?>" class="btn btn-primary mb-3">Tambah Lowongan</a>
                </div>
                <?php endif; ?>
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
                        <td width="250">
                            <?php if( $sess_role == 'HCE') : ?> 
                            <a href="<?php echo base_url('?pagename=admin-loker-edit&id=' . $loker['id_loker']) ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url('?pagename=admin-loker-delete&id=' . $loker['id_loker']) ?>" class="btn btn-danger">Hapus</a>
                            <?php endif; ?>
                            <a href="<?php echo base_url('?pagename=admin-loker-applicant&id=' . $loker['id_loker']); ?>" class="btn btn-info">Seleksi</a>
                        </td>
                    </tr>

                    <?php endforeach; ?>
 
                </tbody>
            </table>
        </div>
    </div>
</div>
