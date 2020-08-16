<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-12">
            <form action="<?php echo base_url('?pagename=admin-loker-store') ?>" method="POST">

                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="form-group">
                            <label for="i-id_kategori">Kategori</label>
                            <select name="id_kategori" id="i-id_kategori" class="form-control">
                                <option value="">Pilih</option>
                                <?php foreach($kategoris as $key => $value) : ?>
                                    <option value="<?php echo $value['id_kategori'] ?>"><?php echo $value['nama_kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Nama Lowongan</label>
                            <input type="text" name="nama_loker" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Deskripsi Lowongan</label>
                            <textarea name="deskripsi_loker" id="" ows="5" class="form-control"></textarea>
                        </div>

                        

                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="i-status_loker">Status Loker</label>
                            <select name="status_loker" id="i-status_loker" class="form-control">
                                <option value="Draft">Draft</option>
                                <option value="Publish">Publish</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="i-jenjang_loker">Jenjang</label>
                            <select name="jenjang_loker" id="i-jenjang_loker" class="jenjang_loker form-control">
                                    
                                    <?php foreach($jenjangs as $jenjang) : ?>
                                        <option value="<?php echo $jenjang['id_jenjang'] ?>"><?php echo $jenjang['nama_jenjang'] ?></option>
                                    <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="i-gaji_loker">Gaji</label>
                            <input name="gaji_loker" type="text" class="form-control" id="i-gaji_loker">
                        </div>

                        <div class="form-group">
                            <label for="i-jenis_loker">Jenis Lowongan</label>
                            <select name="jenis_loker" id="i-jenis_loker" class="form-control">
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="i-level_loker">Level Loker</label>
                            <input name="level_loker" type="text" class="form-control" id="i-level_loker">
                        </div>

                        

                        <div class="form-group">
                            <label for="i-due_date_loker">Tanggal Berakhir Lowongan</label>
                            <input name="due_date_loker" type="date" class="form-control" id="i-due_date_loker">
                        </div>
                        
                        <button class="btn btn-primary">Simpan Data</button>
                    </div>
                </div>
            
            </form>
        </div>
    </div>
</div>
