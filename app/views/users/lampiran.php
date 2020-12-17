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

                <form action="<?php echo base_url("?pagename=add-user-lampiran") ?>" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="i-foto_ktp">Foto KTP</label>
                        <input type="file" name="foto_ktp" id="i-foto_ktp" class="form-control">
                    </div>                

                    <div class="form-group">
                        <label for="i-ijazah">Ijazah</label>
                        <input type="file" name="ijazah" id="i-ijazah" class="form-control">
                    </div>
                    
                    <button class="btn btn-lg btn-primary rounded-0">Simpan Resume</button>
                </form>

            </div>
        </div>


    </div>
</div>

<?php //var_dump($this); ?>

<?php $this->section('footer_script'); ?>

<?php $this->endSection(); ?>