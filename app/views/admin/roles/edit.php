<?php 
    
    $id_role = isset($edit['id_role']) ? $edit['id_role'] : '';
    $nama_role = isset($edit['nama_role']) ? $edit['nama_role'] : '';

?>


<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-3">
            <form action="<?php echo base_url('?pagename=admin-role-update&id=' . $id_role) ?>" method="POST">

                <input type="hidden" name="id_role" value="<?php echo $id_role; ?>">

                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $nama_lengkap ?>">
                </div>

                <button class="btn btn-primary">Simpan Data</button>
            </form>
        </div>
    </div>
</div>
