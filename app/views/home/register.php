<div class="mt-5">
    <?php //var_dump(session()->all()); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-6">
                <h3>TEMUKAN PEKERJAAN IMPIANMU</h3>
                <p class="mb-4">Buat resume online Gratis untuk peroleh peluang kerja lebih baik.</p>

                <?php $error = session()->flash('error'); ?>
                <?php if($error) : ?>

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong><?php echo $error; ?></strong> 
                    </div>
                    
                <?php endif; ?>

                <form action="<?php echo base_url("?pagename=register-user") ?>" method="POST">
                    <div class="form-group">
                        <label for="i-email">Email</label>
                        <input type="text" name="email" class="form-control form-control-lg rounded-0" id="i-email">
                    </div>

                    <div class="form-group">
                        <label for="i-password">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg rounded-0" id="i-password">
                    </div>

                    <div class="form-group">
                        <label for="i-retype-password">Retype Password</label>
                        <input type="password" name="repassword" class="form-control form-control-lg rounded-0" id="i-retype-password">
                    </div>

                    <button class="btn btn-lg btn-primary rounded-0">Buat Akun Baru</button>
                </form>
            </div>
            <div class="col-12 col-md-3"></div>
        </div>
    </div>

</div>