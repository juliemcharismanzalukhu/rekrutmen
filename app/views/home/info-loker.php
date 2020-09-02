<?php 


    $id_loker = isset($_GET['id']) ? $_GET['id'] : false;

    $db = Database::connect();
    $loker = $db->query("

        SELECT * FROM loker
        LEFT JOIN kategori_loker ON loker.id_kategori = kategori_loker.id_kategori 
        LEFT JOIN jenjang ON loker.jenjang_loker = jenjang.id_jenjang 
        WHERE id_loker = '{$id_loker}' AND status_loker = 'Publish'
    
    ")
    ->fetch_array();


?>


<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="card mb-4">
                    <div class="card-body">
                        <h2><?php echo $loker['nama_loker'] ?></h2>
                        <div>
                            <span class="fas fa-money-bill"></span>
                            <?php echo $loker['gaji_loker'] ?>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-12 col-md-4 mb-2">
                                <div>Pendidikan:</div>
                                <div class="font-weight-bold"><?php echo $loker['nama_jenjang'] ?></div>
                            </div>

                            <div class="col-12 col-md-4 mb-2">
                                <div>Jenis:</div>
                                <div class="font-weight-bold"><?php echo $loker['jenis_loker'] ?></div>
                            </div>

                            <div class="col-12 col-md-4 mb-2">
                                <div>Level:</div>
                                <div class="font-weight-bold"><?php echo $loker['level_loker'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="mt-3"><?php echo $loker['deskripsi_loker']; ?></div>

                <?php if(session()->get('is_login')) : ?>   
                    
                    <?php $hasLamaran = (new TelahDilamar)->hasLamaran($id_loker, $_SESSION['user']['id_user']); ?>
                    
                    <?php if(!$hasLamaran) : ?>

                        <form action="?pagename=lamar-loker" method="POST">
                            <input type="hidden" name="id_loker" value="<?php echo $id_loker; ?>">
                            <button class="btn btn-primary rounded-0" name="nama_kerja">Lamar Pekerjaan</button>
                        </form>
                    
                    <?php endif; ?>
               
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>