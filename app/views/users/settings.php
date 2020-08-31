<div class="">
    <div class="container py-4">

        <?php
        
        // echo "<pre>";
        // var_dump($_SESSION);
        // echo "</pre>";

        $sess_user = isset($_SESSION['user']) ? $_SESSION['user'] : [];
        $id_user = isset($sess_user['id_user']) ? $sess_user['id_user'] : false;

        $user = Database::connect()->query("
        
        SELECT * 
        FROM users 
        WHERE users.id_user='{$id_user}'
        
        
        ")->fetch_array();
        $nama_lengkap       = isset($user['nama_lengkap']) ? $user['nama_lengkap'] : false;
        $user_name          = isset($user['user_name']) ? $user['user_name'] : false;
        $nama_lengkap       = isset($user['nama_lengkap']) ? $user['nama_lengkap'] : false;
        $user_pass          = isset($user['user_pass']) ? $user['user_pass'] : false;
        $user_mail          = isset($user['user_mail']) ? $user['user_mail'] : false;
        $user_facebook      = isset($user['user_facebook']) ? $user['user_facebook'] : false;
        $user_twitter       = isset($user['user_twitter']) ? $user['user_twitter'] : false;
        $user_linkedin      = isset($user['user_linkedin']) ? $user['user_linkedin'] : false;
        $user_profile       = isset($user['user_profile']) ? $user['user_profile'] : false;
        
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

                <form action="<?php echo base_url("?pagename=update-user-pengaturan") ?>" method="POST">
                
                    <div class="form-group">

                        <label for="i-nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" id="i-nama_lengkap" value="<?php echo $nama_lengkap; ?>">
                    
                    </div>

                    <div class="form-group">

                        <label for="i-user_facebook">Facebook</label>
                        <input type="text" name="user_facebook" class="form-control" id="i-user_facebook" value="<?php echo $user_facebook; ?>">
                        <small id="passwordHelpInline" class="text-muted">
                            masukan url, contoh https://www.facebook.com/sumber-daya atau Kosongkan jika tidak ada
                        </small>
                    </div>

                    <div class="form-group">

                        <label for="i-user_twitter">Twitter</label>
                        <input type="text" name="user_twitter" class="form-control" id="i-user_twitter" value="<?php echo $user_twitter; ?>">
                        <small id="passwordHelpInline" class="text-muted">
                            masukan url, contoh https://www.twitter.com/sumber-daya atau Kosongkan jika tidak ada
                        </small>
                    </div>

                    <div class="form-group">

                        <label for="i-user_linkedin">Linkedin</label>
                        <input type="text" name="user_linkedin" class="form-control" id="i-user_linkedin" value="<?php echo $user_linkedin; ?>">
                        <small id="passwordHelpInline" class="text-muted">
                            masukan url, contoh https://www.linkedin.com/sumber-daya atau Kosongkan jika tidak ada
                        </small>
                    </div>

                    <div class="form-group">

                        <label for="i-user_profile">Profile</label>
                        <input type="file" name="user_profile" class="form-control" id="i-user_profile" value="">
                    
                    </div>


                    <hr>

                    <div class="form-group">

                        <label for="i-user_pass">Password</label>
                        <input type="password" name="user_pass" class="form-control" id="i-user_pass" value="">
                    
                    </div>

                    <div class="form-group">

                        <label for="i-user_repass">Retype Password</label>
                        <input type="password" name="user_repass" class="form-control" id="i-user_repass" value="">
                    
                    </div>

            
                                
                    <button class="btn btn-lg btn-primary rounded-0">Simpan Pengaturan</button>
                </form>

            </div>
        </div>


    </div>
</div>

<?php //var_dump($this); ?>

<?php $this->section('footer_script'); ?>

   

<?php $this->endSection(); ?>