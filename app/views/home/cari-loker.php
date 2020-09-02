
<?php 

$queryStr = "SELECT * FROM loker WHERE status_loker='Publish' "; 
$search = isset($_GET['search']) ? $_GET['search'] : false;

if($search) $queryStr .= "AND nama_loker LIKE '%{$search}%'";

?>
<div class="page-content">


    <div class="container  mt-3 pt-3">
        <div class="row">

            <div class="col-12 col-md-3">

                <form action="">
                    <input type="hidden" name="pagename" value="cari-loker">
                    <div class="form-group">
                        <input type="text" name="search" value="<?php echo $search; ?>" class="form-control" placeholder="Cari Loker">
                    </div>

                </form>

            </div>

        </div>
        <?php $db = Database::connect()->query($queryStr); ?>

        <?php if($db->num_rows > 0) : ?>
            <?php while($data = $db->fetch_array()) : ?>
            <div class="row mt-3 bg-white ">
                <div class="col-12">
                    <div class="p-3 border">
                        <h5><a href="?pagename=info-loker&id=<?php echo $data['id_loker'] ?>" class="text-dark"><?php echo $data['nama_loker']; ?></a></h5>
                        <span class="text-primary"><?php echo $data['gaji_loker']; ?></span>
                        <div><?php echo substr(strip_tags($data['deskripsi_loker']), 0, 200) . '...' ?></div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        <?php else: ?>

            <div class="row">
                <div class="col-12">
                    <h3>Hasil pencarian "<?php echo $search ?>" tidak ditemukan</h3>
                </div>
            </div>

        <?php endif; ?>
    </div>


</div>