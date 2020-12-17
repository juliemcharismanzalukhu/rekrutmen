
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Resume</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpatd.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    <?php 
    
    $id_user = isset($_GET['id_user']) ? $_GET['id_user'] : false;
    
    $db = Database::connect();


    $queryStr = "
        SELECT * FROM users 
        JOIN users_karyawan ON users.id_user = users_karyawan.id_user
        WHERE users.id_user='{$id_user}'
    ";

    $query = $db->query($queryStr);

    $data = $query->fetch_array();
    
    ?>

    <h3><?php echo $data['nama_lengkap']  ?></h3>
    <hr>

    <table class="">
        <tr>
            <td class="text-left">Tahun Kelahiran</td>
            <td class="align-middle"><?php echo $data['tahun_lahir'] ?></td>
        </tr>
        
        <tr>
            <td class="text-left">Jenis Kelamin</td>
            <td class="align-middle"><?php echo $data['jk'] ?></td>
        </tr>
        
        <tr>
            <td class="text-left">Email</td>
            <td class="align-middle"><?php echo $data['user_mail'] ?></td>
        </tr>
        
        <tr>
            <td class="text-left">Telepon</td>
            <td class="align-middle"><?php echo $data['telepon'] ?></td>
        </tr>
        
        <tr>
            <td class="text-left">Alamat</td>
            <td class="align-middle"><?php echo $data['alamat'] ?></td>
        </tr>
    </table>

    <hr>

    <table>
        <tr>
            <td class="text-left">Ringkasan Profile</td>
            <td class="align-middle"><?php echo $data['ringkasan_profile'] ?></td>
        </tr>
        
        <tr>
            <td class="text-left">Riwayat Pendidikan</td>
            <td class="align-middle"><?php echo $data['riwayat_pendidikan'] ?></td>
        </tr>
        
        <tr>
            <td class="text-left">Keahlian</td>
            <td class="align-middle"><?php echo $data['keahlian'] ?></td>
        </tr>
        <tr>
            <td class="text-left">Lama Pengalaman</td>
            <td class="align-middle"><?php echo $data['lama_bekerja']; ?></td>
        </tr>        
        <tr>
            <td class="text-left">Pengalaman</td>
            <td class="align-middle"><?php echo $data['pengalaman_bekerja'] ?></td>
        </tr>


        
    </table>


</body>
</html>


<?php 


$html = ob_get_clean(); 
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream($data['nama_lengkap'] . date('Ymd'));

?>