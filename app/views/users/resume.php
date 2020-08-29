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
                        <label for="i-jk">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="i-jk" value="Laki - Laki" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Laki - Laki
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Perempuan" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Perempuan
                            </label>
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </div>
</div>