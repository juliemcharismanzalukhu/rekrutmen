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
                                <th>Status</th>
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
                                <?php 
                                
                                $label_class = '';
                                if( $data['status'] == 'REJECTED' ) $label_class = 'text-danger';
                                elseif( $data['status'] == 'ACCEPTED') $label_class = 'text-success';
                                elseif( $data['status'] == 'INVITE TO INTERVIEW') $label_class = 'text-info';
                                elseif( $data['status'] == 'PENDING') $label_class = 'text-warning';

                                ?>
                                <tr>
                                    <td><a href="<?php echo base_url("?pagename=info-loker&id=" . $data['id_loker']) ?>"><?php echo $data['nama_loker'] ?></a></td>
                                    <td><?php echo $data['tanggal_lamar']; ?></td>
                                    <td><span class="<?php echo $label_class; ?>"><?php echo $data['status']; ?><span></td>
                                </tr>

                            <?php endwhile; ?>
                        
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</div>