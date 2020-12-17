<?php 

model('LokersModel');
model('TelahDilamar');


class FrontendController extends Controller 
{

    public function index() 
    {
        view('home/header');
        view('home/homepage');
        view('home/footer');
    }

    public function cariLoker() 
    {
        view('home/header');
        view('home/cari-loker');
        view('home/footer');
    }

    public function infoLoker() 
    {
        view('home/header');
        view('home/info-loker');
        view('home/footer');
    }


    public function userDashboard() 
    {
        view('home/header');
        view('users/dashboard');
        view('home/footer');
    }

    public function userResume() 
    {
        view('home/header');
        view('users/resume');
        view('home/footer');
    }

    public function userPengaturan() 
    {

        view('home/header');
        view('users/settings');
        view('home/footer');

    }

    public function userLamaranKerja()
    {


        view('home/header');
        view('users/lamaran-kerja');
        view('home/footer');

    }

    public function userBantuan()
    {


        view('home/header');
        view('users/bantuan');
        view('home/footer');

    }

    


    public function updateUserResume() {

        if(!session()->get('is_login')) Redirect::to(base_url());

        $id_user                = $_SESSION['user']['id_user'] ? $_SESSION['user']['id_user'] : false;

        $nama_lengkap           = $this->request('nama_lengkap');
        $ringkasan_profile      = $this->request('ringkasan_profile');
        $jk                     = $this->request('jk');
        $tahun_lahir        = $this->request('tahun_lahir');
        $status_perkawinan      = $this->request('status_perkawinan');
        $alamat                 = $this->request('alamat');
        $telepon                = $this->request('telepon');
        $riwayat_pendidikan     = $this->request('riwayat_pendidikan');
        $keahlian               = $this->request('keahlian');
        $lama_bekerja           = $this->request('lama_bekerja');
        $pengalaman_bekerja     = $this->request('pengalaman_bekerja');
        $pendidikan_terakhir    = $this->request('pendidikan_terakhir');

        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        // die();

        $rules = [
            'nama_lengkap'          => 'Nama Lengkap',
            'ringkasan_profile'     => 'Ringkasan Profile',
            'jk'                    => 'Jenis Kelamin',
            'tahun_lahir'           => 'Tahun Lahir',
            'status_perkawinan'     => 'Status Perkawinan',
            'alamat'                => 'Alamat',
            'telepon'               => 'Telepon',
            'riwayat_pendidikan'    => 'Riwayat Pendidikan',
            'keahlian'              => 'Keahlian',
            'lama_bekerja'          => 'Lama Bekerja',
            'pengalaman_bekerja'    => 'Pengalaman Bekerja',
            'pendidikan_terakhir'   => 'Pendidikan Terakhir'
        ]; 


        foreach($rules as $key => $value) 
        {

            if(empty(trim($this->request($key)))) {
                Redirect::with('message', $value . ' tidak boleh kosong')->to(base_url('?pagename=user-resume'));
            }

        }



        $db         = Database::connect();
        $cari       = $db->query("SELECT id_user FROM users_karyawan WHERE id_user='{$id_user}'");

        $queryStr   = "";

        if($cari->num_rows > 0) 
        {

            $queryStr = "

                UPDATE 
                    users_karyawan 
                SET 
                    ringkasan_profile = '{$ringkasan_profile}', 
                    jk = '{$jk}', 
                    tahun_lahir = '{$tahun_lahir}', 
                    status_perkawinan = '{$status_perkawinan}', 
                    alamat = '{$alamat}', 
                    telepon = '{$telepon}', 
                    riwayat_pendidikan = '{$riwayat_pendidikan}', 
                    keahlian = '{$keahlian}', 
                    lama_bekerja = '{$lama_bekerja}', 
                    pengalaman_bekerja = '{$pengalaman_bekerja}',
                    pendidikan_terakhir = '{$pendidikan_terakhir}'
                WHERE 
                    id_user = '{$id_user}'

            ";

        }
        else 
        {
            $queryStr = "

                INSERT INTO users_karyawan(id_user, ringkasan_profile, jk, tahun_lahir, status_perkawinan, alamat, telepon, riwayat_pendidikan, keahlian, lama_bekerja, pengalaman_bekerja, pendidikan_terakhir) 
                VALUES ('{$id_user}', '{$ringkasan_profile}', '{$jk}', '{$tahun_lahir}', '{$status_perkawinan}', '{$alamat}', '{$telepon}', '{$riwayat_pendidikan}', '{$keahlian}', '{$lama_bekerja}', '{$pengalaman_bekerja}', '{$pendidikan_terakhir}');

            ";
        }

        $db->query($queryStr);
        
        $queryStr = "

            UPDATE users 
            SET nama_lengkap = '{$nama_lengkap}'
            WHERE id_user = '{$id_user}'

        ";

        $db->query($queryStr);

        Redirect::to(base_url('?pagename=user-resume'));


    }

    function updateUserPengaturan()
    {

        if(!session()->get('is_login')) Redirect::to(base_url());


        $db = Database::connect();

        
        $id_user = isset($_SESSION['user']['id_user']) ? $_SESSION['user']['id_user'] : false;

        $nama_lengkap   = $this->request('nama_lengkap');
        $user_linkedin  = $this->request('user_linkedin');
        $user_twitter   = $this->request('user_twitter');
        $user_facebook  = $this->request('user_facebook');
        $user_pass      = $this->request('user_pass');
        $user_repass    = $this->request('user_repass');
        $user_profile   = $this->getFile('user_profile');

        $queryStr = "

            UPDATE 
                users 
            SET 
                nama_lengkap = '{$nama_lengkap}', 
                user_linkedin = '{$user_linkedin}', 
                user_facebook = '{$user_facebook}', 
                user_twitter = '{$user_twitter}' 
           

        ";


        if( $user_profile )
        {

            $move = move_uploaded_file($user_profile['tmp_name'], 'uploads/' . $user_profile['name']);

            if( $move ) $queryStr .= ", user_profile = '{$user_profile['name']}'";

        }

        


        if(!empty(trim($user_pass)) && !empty(trim($user_repass))) 
        {

            if($user_pass != $user_repass)
            {

                Redirect::with('message', 'Password tidak sama')->to(base_url('?pagename=user-pengaturan'));
            }

            if($user_pass == $user_repass)
            {
                $queryStr .= " , user_pass='" . md5($user_repass) . "' ";
            }

            

        }


        $queryStr .= " WHERE 
        
        id_user = '{$id_user}' 
        
        ";

        $update = $db->query($queryStr);

        Redirect::with('message', 'Berhasil di perbaharui')->to(base_url('?pagename=user-pengaturan'));
    }

    function lamarPekerjaan()
    {

        if(!session()->get('is_login')) Redirect::to(base_url());
        
        $telahDilamar = new TelahDilamar();
        $user = session()->get('user');
        $id_loker = $this->request('id_loker');

        $data = [
            'id_user'       => $user['id_user'],
            'id_loker'      => $id_loker,
            'tanggal_lamar' => date('Y-m-d')
        ];


        $telahDilamar->insert($data);


        Redirect::with('message', 'Berhasil Melamar')->to(base_url('?pagename=info-loker&id=' . $id_loker));


    }

    public function userResumePdf() 
    {

        require_once 'app/third_party/dompdf/autoload.inc.php';

        view('users/resume-pdf');


    }



    private function tryUploadFile( $name ) {


        $file = $_FILES[ $name ];

        $path = "uploads";

        if(!empty($file['tmp_name'])) 
        {
            
            $name = $file['name'];
            $is_upload = move_uploaded_file( $file['tmp_name'], "{$path}/{$name}");

            if( $is_upload ) return $name;

        }


        return '';


    }

    public function uploadBerkasUsers() {


        $db = Database::connect();

        $response = [];

        $file_name = $this->tryUploadFile( 'file' );
        $id_user = session()->get('user')['id_user'];

        $query_str = "INSERT INTO users_files(id_user, lokasi_file) VALUES ('{$id_user}', '{$file_name}')";

        $insert = $db->query( $query_str );

        if( $insert ) 
        {

            $response['code'] = 200;
            $response['message'] = 'Success';
            $response['data'] = [
                'id' => $db->insert_id,
                'name' => $file_name
            ];

            

        }

        $response['last_query'] = $query_str;

        echo json_encode( $response );

        die();

    }

    public function deleteBerkasUser() {

        
        $db = Database::connect();
        $id_user = session()->get( 'user' )[ 'id_user' ];
        $id_file = $this->request( 'id' );
        $query_str = "DELETE FROM users_files WHERE id_user='{$id_user}' AND id_file = '{$id_file}'";
        
        $db->query( $query_str );

    }

    public function userLogout() {

        session_destroy();
        header( 'location: ' . base_url(''), 'refresh' );
    }


}