<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-4">
            <form action="<?php echo base_url('?pagename=admin-user-store') ?>" method="POST">

                <div class="form-group">
                    <label for="i-id_role">Role</label>
                    <select name="id_role" id="i-id_role" class="form-control">
                        <option value="">Pilih</option>
                        <?php foreach($roles as $key => $value) : ?>
                            <option value="<?php echo $value['id_role'] ?>"><?php echo $value['nama_role']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="user_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="user_mail" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>


                <button class="btn btn-primary">Simpan Data</button>
            </form>
        </div>
    </div>
</div>
