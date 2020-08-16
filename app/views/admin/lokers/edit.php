<?php 


$id_loker = isset($edit['id_loker']) ? $edit['id_loker'] : false;
$id_kategori = isset($edit['id_kategori']) ? $edit['id_kategori'] : false;

$jenjang_loker = isset($edit['jenjang_loker']) ? $edit['jenjang_loker'] : false;
$nama_loker = isset($edit['nama_loker']) ? $edit['nama_loker'] : false;
$deskripsi_loker = isset($edit['deskripsi_loker']) ? $edit['deskripsi_loker'] : false;
$status_loker = isset($edit['status_loker']) ? $edit['status_loker'] : false;
$gaji_loker = isset($edit['gaji_loker']) ? $edit['gaji_loker'] : false;
$level_loker = isset($edit['level_loker']) ? $edit['level_loker'] : false;
$jenis_loker = isset($edit['jenis_loker']) ? $edit['jenis_loker'] : false;
$due_date_loker = isset($edit['due_date_loker']) ? $edit['due_date_loker'] : false;


?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-12">
            <form action="<?php echo base_url('?pagename=admin-loker-update&id=' . $id_loker) ?>" method="POST">

                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="form-group">
                            <label for="i-id_kategori">Kategori</label>
                            <select name="id_kategori" id="i-id_kategori" class="form-control">
                                <option value="">Pilih</option>
                                <?php foreach($kategoris as $key => $value) : ?>
                                    <option value="<?php echo $value['id_kategori'] ?>" <?php if($value['id_kategori'] == $id_kategori) echo "selected"; ?>><?php echo $value['nama_kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Nama Lowongan</label>
                            <input type="text" name="nama_loker" class="form-control" value="<?php echo $nama_loker; ?>">
                        </div>

                        <div class="form-group">
                            <label for="i-deskripsi_loker">Deskripsi Lowongan</label>
                            <textarea name="deskripsi_loker" id="i-deskripsi_loker" rows="5" class="form-control"><?php echo $deskripsi_loker ?></textarea>
                        </div>

                        

                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="i-status_loker">Status Loker</label>
                            <select name="status_loker" id="i-status_loker" class="form-control">
                                <option value="Draft" <?php if($status_loker == 'Draft') echo 'selected'; ?>>Draft</option>
                                <option value="Publish" <?php if($status_loker == 'Publish') echo 'selected'; ?>>Publish</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="i-jenjang_loker">Jenjang</label>
                            <select name="jenjang_loker" id="i-jenjang_loker" class="jenjang_loker form-control">
                                    
                                    <?php foreach($jenjangs as $jenjang) : ?>
                                        <option value="<?php echo $jenjang['id_jenjang'] ?>"  <?php if($jenjang['id_jenjang'] == $jenjang_loker) echo 'selected'; ?>><?php echo $jenjang['nama_jenjang'] ?></option>
                                    <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="i-gaji_loker">Gaji</label>
                            <input name="gaji_loker" type="text" class="form-control" id="i-gaji_loker" value="<?php echo $gaji_loker; ?>">
                        </div>

                        <div class="form-group">
                            <label for="i-jenis_loker">Jenis Lowongan</label>
                            <select name="jenis_loker" id="i-jenis_loker" class="form-control">
                                <option value="Full Time" <?php if($jenis_loker == 'Full Time') echo 'selected'; ?>>Full Time</option>
                                <option value="Part Time" <?php if($jenis_loker == 'Part Time') echo 'selected'; ?>>Part Time</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="i-level_loker">Level Loker</label>
                            <input name="level_loker" type="text" class="form-control" id="i-level_loker" value="<?php echo $level_loker ?>">
                        </div>

                        

                        <div class="form-group">
                            <label for="i-due_date_loker">Tanggal Berakhir Lowongan</label>
                            <input name="due_date_loker" type="date" class="form-control" id="i-due_date_loker" value="<?php echo $due_date_loker ?>">
                        </div>
                        
                        <button class="btn btn-primary">Simpan Data</button>
                    </div>
                </div>
            
            </form>
        </div>
    </div>
</div>
