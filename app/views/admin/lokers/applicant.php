<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <?php 

                $id = isset($_GET['id']) ? $_GET['id'] : false;  
                $loker = (new LokersModel)->find($id)->get(); 
                    
            ?>
            
            <a href="?pagename=admin-lokers">Kembali</a>
            <h3><?php echo $loker['nama_loker']; ?></h3>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nama </th>
                        <th>Berkas</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $db = Database::connect();
            
                    $query = $db->query("
                    
                        SELECT * FROM telah_dilamar 
                        LEFT JOIN users ON telah_dilamar.id_user = users.id_user
                        WHERE telah_dilamar.id_loker = '{$id}'; 
                    
                    ")


                    
                    
                    ?>
                    <?php while( $user = $query->fetch_array()) : ?>
                    <?php $files = $db->query(" SELECT * FROM users_files WHERE id_user='{$user['id_user']}'"); ?>
                    <tr>
                        <td scope="row"><a href="?pagename=admin-loker-applicant-pdf&id_user=<?php echo $user['id_user'] ?>"><?php echo $user['nama_lengkap'] ?></a></td>
                        <td>
                            <ul class="m-0">
                                <?php while($file = $files->fetch_array()) : ?>
                                    <li><a href="<?php echo base_url('/uploads/' . $file['lokasi_file']) ?>"><?php echo $file['lokasi_file']; ?></a></li>
                                <?php endwhile; ?>
                            </ul>

                        </td>
                        <td scope="row"><?php echo $user['tanggal_lamar'] ?></td>
                        <td><?php echo $user['status'] ?></td>
                        <td>
                        
                            <form action="<?php echo base_url('?pagename=admin-update-loker-applicant') ?>" method="POST">
                                <input type="hidden" name="id_user" value="<?php echo $user['id_user']; ?>">
                                <input type="hidden" name="id_loker" value="<?php echo $user['id_loker']; ?>">

                                <div class="btn-group">
                                    <button class="btn btn-sm btn-warning rounded-0" name="status" value="PENDING">PENDING</button>
                                    <button class="btn btn-sm  btn-danger rounded-0" name="status" value="REJECTED">REJECT</button>
                                    <button class="btn btn-sm  btn-success rounded-0" name="status" value="ACCEPTED">ACCEPT</button>
                                    <button class="btn btn-sm  btn-info rounded-0" name="status" value="INVITE TO INTERVIEW">INVITE</button>
                                </div>

                            </form>

                        </td>
                    </tr>

                    <?php endwhile; ?>
 
                </tbody>
            </table>
        </div>
    </div>
</div>
