<div class="page-header">



</div>


<div class="page-content">


    <div class="container  mt-3 pt-3">

        <?php $db = Database::connect()->query("SELECT * FROM loker"); ?>

        <?php while($data = $db->fetch_array()) : ?>
        <div class="row mt-3 bg-white p-3 border">
            <div class="col-12">
                <h5><a href="?pagename=info-loker&id=<?php echo $data['id_loker'] ?>" class="text-dark"><?php echo $data['nama_loker']; ?></a></h5>
                <span class="text-primary"><?php echo $data['gaji_loker']; ?></span>
                <div><?php echo substr(strip_tags($data['deskripsi_loker']), 0, 200) ?></div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>


</div>