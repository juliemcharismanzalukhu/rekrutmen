<div class="">
    <div class="container mt-4">


        <div class="row">
            <div class="col-12 col-md-3">
                <?php view('users/sidebar'); ?>
            </div>

            <div class="col-12 col-md-9">
                <form action="">


                    <div class="form-group">
                        <label for="i-nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="i-ringkasan_profile">Ringkasan Profile</label>
                        <textarea name="ringkasan_profile" id="i-ringkasan_profile" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <hr>

                    <div class="form-group">
                        <label for="i-jk-l">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="i-jk-l" value="Laki - Laki">
                            <label class="form-check-label" for="i-jk-l">
                                Laki - Laki
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="i-jk-p" value="Perempuan">
                            <label class="form-check-label" for="i-jk-p">
                                Perempuan
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="i-tgl_lhr">Tanggal Lahir</label>
                        <select name="tgl_lhr" id="i-tgl_lhr" class="form-control">
                            <option value="">Pilih</option>
                            <?php for($i = date('Y') - 100; $i <= date('Y'); $i++) : ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="i-status_pernikahan">Status Pernikahan</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_pernikahan" id="i-status_pernikahan-belum_menikah" value="Belum Menikah">
                            <label class="form-check-label" for="i-status_pernikahan-belum_menikah">
                                Belum Menikah
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_pernikahan" id="i-status_pernikahan-cerai" value="Cerai">
                            <label class="form-check-label" for="i-status_pernikahan-belum_menikah">
                                Cerai
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_pernikahan" id="i-status_pernikahan-menikah" value="Menikah">
                            <label class="form-check-label" for="i-status_pernikahan-menikah">
                                Menikah
                            </label>
                        </div>

                      
                    </div>
                    
                    <div class="form-group">
                        <label for="i-alamat">Alamat</label>
                        <textarea name="alamat" id="i-alamat" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="i-tgl_lhr">Pendidikan Terakhir</label>
                        <select name="tgl_lhr" id="i-tgl_lhr" class="form-control">
                            <option value="">Pilih</option>
                            <?php for($i = date('Y') - 100; $i <= date('Y'); $i++) : ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="i-riwayat_pendidikan">Riwayat Pendidikan</label>
                        <textarea name="riwayat_pendidikan" id="i-riwayat_pendidikan" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>