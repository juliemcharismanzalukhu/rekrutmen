<div class="">
    <div class="container py-4">

        <?php
        
        // echo "<pre>";
        // var_dump($_SESSION);
        // echo "</pre>";

        $user = isset($_SESSION['user']) ? $_SESSION['user'] : [];
        $id_user = isset($user['id_user']) ? $user['id_user'] : false;

        $user_karyawan = Database::connect()->query("
        
        SELECT * 
        FROM users 
        JOIN users_karyawan ON users.id_user = users_karyawan.id_user 
        WHERE users.id_user='{$user['id_user']}'
        
        
        ")->fetch_array();
        $nama_lengkap           = isset($user_karyawan['nama_lengkap']) ? $user_karyawan['nama_lengkap'] : false;
        $ringkasan_profile      = isset($user_karyawan['ringkasan_profile']) ? $user_karyawan['ringkasan_profile'] : false;
        $jk                     = isset($user_karyawan['jk']) ? $user_karyawan['jk'] : false;
        $tahun_lahir            = isset($user_karyawan['tahun_lahir']) ? $user_karyawan['tahun_lahir'] : false;
        $alamat                 = isset($user_karyawan['alamat']) ? $user_karyawan['alamat'] : false;
        $telepon                = isset($user_karyawan['telepon']) ? $user_karyawan['telepon'] : false;
        $riwayat_pendidikan     = isset($user_karyawan['riwayat_pendidikan']) ? $user_karyawan['riwayat_pendidikan'] : false;
        $keahlian               = isset($user_karyawan['keahlian']) ? $user_karyawan['keahlian'] : false;
        $lama_bekerja           = isset($user_karyawan['lama_bekerja']) ? $user_karyawan['lama_bekerja'] : false;
        $pengalaman_bekerja     = isset($user_karyawan['pengalaman_bekerja']) ? $user_karyawan['pengalaman_bekerja'] : false;
        $pendidikan_terakhir    = isset($user_karyawan['pendidikan_terakhir']) ? $user_karyawan['pendidikan_terakhir'] : false;
        $status_perkawinan    = isset($user_karyawan['status_perkawinan']) ? $user_karyawan['status_perkawinan'] : false;
        
        ?>


        <div class="row">

            <div class="col-12">

                <?php $message = session()->flash('message');  ?>
                <?php if($message) : ?>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="col-12 col-md-3">
                <?php view('users/sidebar') ?>
            </div>

            <div class="col-12 col-md-9">

                <form action="<?php echo base_url("?pagename=update-user-resume") ?>" method="POST">
                
                    <div class="form-group">

                        <label for="i-nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" id="i-nama_lengkap" value="<?php echo $nama_lengkap; ?>">
                    
                    </div>

                    <div class="form-group">
                        <label for="i-ringkasan_profile">Ringkasan Profile</label>
                        <textarea name="ringkasan_profile" id="i-ringkasan_profile" cols="30" rows="10" class="form-control"><?php echo $ringkasan_profile; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="i-ijk">Jenis Kelamin</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="i-jk-laki_laki" value="Laki-Laki" <?php if($jk == 'Laki-Laki') echo 'checked'; ?>>
                                <label class="form-check-label" for="i-jk-laki_laki">Laki - Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="i-jk-perempuan" value="Perempuan" <?php if($jk == 'Perempuan') echo 'checked'; ?>>
                                <label class="form-check-label" for="i-jk-perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="i-tahun_lahir">Tahun Kelahiran</label>
                        <select name="tahun_lahir" id="i-tahun_lahir" class="form-control">
                            <option value="">Pilih</option>
                            <?php $current_date = date('Y'); ?>
                            <?php for($i = $current_date - 100; $i < $current_date; $i++) : ?>
                                <option value="<?php echo $i; ?>" <?php if($i == $tahun_lahir) echo 'selected'; ?>><?php echo $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="i-status_perkawinan">Status Pernikahan</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_perkawinan" id="i-status_perkawinan-belum_menikah" value="Belum Menikah" <?php if($status_perkawinan == 'Belum Menikah') echo 'checked'; ?>>
                                <label class="form-check-label" for="i-status_perkawinan-belum_menikah">Belum Menikah</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_perkawinan" id="i-status_perkawinan-menikah" value="Menikah" <?php if($status_perkawinan == 'Menikah') echo 'checked'; ?>>
                                <label class="form-check-label" for="i-status_perkawinan-menikah">Menikah</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_perkawinan" id="i-status_perkawinan-cerai" value="Cerai" <?php if($status_perkawinan == 'Cerai') echo 'checked'; ?>>
                                <label class="form-check-label" for="i-status_perkawinan-cerai">Perempuan</label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="i-alamat">Alamat</label>
                        <textarea name="alamat" id="i-alamat" cols="30" rows="10" class="form-control"><?php echo $alamat; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="i-telepon">Telepon</label>
                        <input name="telepon" id="i-telepon" cols="30" rows="10" class="form-control" value="<?php echo $telepon; ?>">
                    </div>

                    <div class="form-group">
                        <label for="i-pendidikan_terakhir">Pendidikan Terakhir</label>
                        <select name="pendidikan_terakhir" id="i-pendidikan_terakhir" class="form-control">
                            <option value="">Pilih</option>
                            <?php 

                                $pendidikan_terakhir_arr = [
                                    'Diploma/D1/D2/D3',
                                    'Doctor / S3',
                                    'Master / S2',
                                    'Sarjana / S1',
                                    'SMA / SMK / STM'
                                ];

                            ?>

                            <?php foreach($pendidikan_terakhir_arr as $pendidikan) : ?>
                                <option value="<?php echo $pendidikan ?>" <?php if($pendidikan == $pendidikan_terakhir) echo "selected"; ?>><?php echo $pendidikan; ?></option>
                            <?php endforeach; ?>
                        
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="i-riwayat_pendidikan">Riwayat Pendidikan</label>
                        <textarea name="riwayat_pendidikan" id="i-riwayat_pendidikan" cols="30" rows="10" class="form-control"><?php echo $riwayat_pendidikan; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="i-keahlian">Keahlian</label>
                        <textarea name="keahlian" id="i-keahlian" cols="30" rows="10" class="form-control"><?php echo $keahlian; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="i-lama_bekerja">Lama Bekerja</label>
                        <select name="lama_bekerja" id="i-lama_bekerja" class="form-control">
                            <option value="">Pilih</option>
                            <?php 
                            
                            
                            $lama_bekerja_arr = [
                                'Fresh Graduate',
                                'Kurang Dari 1 Tahun',
                                '1 - 2 Tahun',
                                '2 - 5 Tahun',
                                '5 - 10 Tahun',
                                'Lebih dari 10 Tahun'
                            ];
                            
                            
                            ?>

                            <?php foreach($lama_bekerja_arr as $lama_kerja) : ?>
                                <option value="<?php echo $lama_kerja ?>" <?php if($lama_kerja == $lama_bekerja) echo 'selected'; ?>><?php echo $lama_kerja ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="i-pengalaman_bekerja">Pengalaman Bekerja</label>
                        <textarea name="pengalaman_bekerja" id="i-pengalaman_bekerja" cols="30" rows="10" class="form-control"><?php echo $pengalaman_bekerja; ?></textarea>
                    </div>
                                
                    <button class="btn btn-lg btn-primary rounded-0">Simpan Resume</button>
                </form>

            </div>
        </div>


    </div>
</div>

<?php //var_dump($this); ?>

<?php $this->section('footer_script'); ?>

    <script src="<?php echo base_url('assets/plugins/tinymce/js/tinymce/tinymce.min.js') ?>"></script>

    <script>
        tinymce.init({
            selector: '#i-pengalaman_bekerja',
            // setup: function(editor) {
            //     editor.on('change', function(e){
            //         console.log(e);
            //         $('#i-pengalaman_bekerja').val(tinymce.get("i-pengalaman_bekerja").getContent())
            //     })
            // }
        });

        tinymce.init({
            selector: '#i-keahlian'
        });


        tinymce.init({
            selector: '#i-riwayat_pendidikan'
        });

        tinymce.init({
            selector: '#i-alamat'
        });

        tinymce.init({
            selector: '#i-ringkasan_profile'
        });
    </script>

<?php $this->endSection(); ?>