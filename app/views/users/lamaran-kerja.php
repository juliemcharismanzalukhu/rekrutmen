<div class="mt-3">

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <?php view('users/sidebar') ?>
            </div>
            <div class="col-12 col-md-9">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                            
                            $db = Database::connect();

                            $queryStr = "
                                SELECT * FROM telah_dilamar 
                                JOIN loker ON telah_dilamar.id_loker = loker.id_loker
                                WHERE id_user = '{$_SESSION['user']['id_user']}'    
                            ";

                            $query = $db->query($queryStr);
                            
                            ?>

                            <?php while($data = $query->fetch_array()) : ?>

                                <tr>
                                    <td><a href="<?php echo base_url("?pagename=info-loker&id=" . $data['id_loker']) ?>"><?php echo $data['nama_loker'] ?></a></td>
                                    <td><?php echo $data['tanggal_lamar']; ?></td>
                                </tr>

                            <?php endwhile; ?>
                        
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</div>