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
            </div>
        </div>
    </div>
</div>