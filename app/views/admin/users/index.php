<?php 


$sess_id_user = isset($_SESSION['user']['id_user']) ? $_SESSION['user']['id_user'] : false;
$sess_role = isset($_SESSION['user']['nama_role']) ? $_SESSION['user']['nama_role'] : false;

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <?php if( $sess_role == 'HCE') : ?>
                <div>
                    <a href="<?php echo base_url('?pagename=admin-user-add') ?>" class="btn btn-primary mb-3">Tambah Users</a>
                </div>
                <?php endif; ?>
                <div></div>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach($users as $user) : ?>
                    <tr>
                        <td scope="row"><?php echo $user['nama_lengkap'] ?></td>
                        <td><?php echo $user['user_name'] ?></td>
                        <td><?php echo $user['user_mail'] ?></td>
                        <td><?php echo $user['nama_role'] ?></td>

                        <?php if( $sess_role == 'HCE') : ?>

                        <td width="180">
                            <a href="<?php echo base_url('?pagename=admin-user-edit&id=' . $user['id_user']) ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url('?pagename=admin-user-delete&id=' . $user['id_user']) ?>" class="btn btn-danger">Hapus</a>
                        </td>

                        <?php elseif( $user['id_user'] == $sess_id_user ) : ?>
                            
                        <td width="180">
                            <a href="<?php echo base_url('?pagename=admin-user-edit&id=' . $user['id_user']) ?>" class="btn btn-warning">Edit</a>
                        </td>
                        <?php else: ?>

                            <td>No Action</td>
                    
                        <?php endif; ?>
                    </tr>

                    <?php endforeach; ?>
 
                </tbody>
            </table>
        </div>
    </div>
</div>
