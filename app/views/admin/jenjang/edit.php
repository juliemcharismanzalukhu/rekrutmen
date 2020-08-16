<?php 
    
    $id_jenjang = isset($edit['id_jenjang']) ? $edit['id_jenjang'] : '';
    $nama_jenjang = isset($edit['nama_jenjang']) ? $edit['nama_jenjang'] : '';

?>


<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-3">
            <form action="<?php echo base_url('?pagename=admin-jenjang-update&id=' . $id_jenjang) ?>" method="POST">

                <input type="hidden" name="id_jenjang" value="<?php echo $id_jenjang; ?>">

                <div class="form-group">
                    <label for="">Jenjang</label>
                    <input type="text" name="nama_jenjang" class="form-control" value="<?php echo $nama_jenjang ?>">
                </div>

                <button class="btn btn-primary">Simpan Data</button>
            </form>
        </div>
    </div>
</div>
