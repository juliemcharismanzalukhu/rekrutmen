<?php 
    
    $id_user = isset($edit['id_user']) ? $edit['id_user'] : '';
    $nama_lengkap = isset($edit['nama_lengkap']) ? $edit['nama_lengkap'] : '';
    $user_name = isset($edit['user_name']) ? $edit['user_name'] : '';
    $user_mail = isset($edit['user_mail']) ? $edit['user_mail'] : '';

?>


<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-3">
            <form action="<?php echo base_url('?pagename=admin-user-update&id=' . $id_user) ?>" method="POST">

                <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">

                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $nama_lengkap ?>">
                </div>

                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="user_name" class="form-control" value="<?php echo $user_name ?>">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="user_mail" class="form-control" value="<?php echo $user_mail ?>">
                </div>

                <button class="btn btn-primary">Simpan Data</button>
            </form>
        </div>
    </div>
</div>
