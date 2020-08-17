<div class="mt-3">

    <div class="container">

        <div class="row">
            <div class="col-12 col-md-6">
                <h3 class="mb-lg-5">Login untuk memulai</h3>
                <form action="<?php echo base_url('?pagename=auth') ?>" method="POST">

                    <div class="form-group">
                        <label for="i-email">Email</label>
                        <input name="email" type="email" class="form-control form-control-lg rounded-0" id="i-email">
                    </div>

                    <div class="form-group">
                        <label for="i-password">Password</label>
                        <input name="password" type="password" class="form-control form-control-lg rounded-0" id="i-password">
                    </div>

                    <button class="btn btn-primary rounded-0 btn-lg">Login</button>
                </form>
            </div>

            <div class="col-12 col-md-6">
                <h3 class="mb-lg-5">Pengguna Baru</h3>
                <p>Jika Anda belum memiliki akun, silakan mendaftar terlebih dahulu sebagai Pencari Kerja</p>

                <a href="<?php echo base_url('?pagename=register') ?>" class="btn btn-primary btn-lg rounded-0">Buat Akun Baru</a>
            </div>
        </div>

    </div>

</div>