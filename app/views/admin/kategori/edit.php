<?php 
    
    $id_kategori = isset($edit['id_kategori']) ? $edit['id_kategori'] : '';
    $nama_kategori = isset($edit['nama_kategori']) ? $edit['nama_kategori'] : '';

?>


<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-3">
            <form action="<?php echo base_url('?pagename=admin-kategori-update&id=' . $id_kategori) ?>" method="POST">

                <input type="hidden" name="id_kategori" value="<?php echo $id_kategori; ?>">

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama_kategori" class="form-control" value="<?php echo $nama_kategori ?>">
                </div>

                <button class="btn btn-primary">Simpan Data</button>
            </form>
        </div>
    </div>
</div>
