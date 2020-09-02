<?php 


    $id_loker = isset($_GET['id']) ? $_GET['id'] : false;

    $db = Database::connect();
    $loker = $db->query("

        SELECT * FROM loker
        LEFT JOIN kategori_loker ON loker.id_kategori = kategori_loker.id_kategori 
        WHERE id_loker = '{$id_loker}'
    
    ")
    ->fetch_array();


?>


<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo $loker['nama_loker'] ?></h2>
                <div><?php echo $loker['gaji_loker'] ?></div>


                <div class="mt-3"><?php echo $loker['deskripsi_loker']; ?></div>


                <form action="?pagename=lamar-loker" method="POST">
                    <input type="hidden" name="id_loker" value="<?php echo $id_loker; ?>">
                    <button class="btn btn-primary rounded-0" name="nama_kerja">Lamar Pekerjaan</button>
                </form>
            </div>
        </div>
    </div>
</div>