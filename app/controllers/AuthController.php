<?php 

class AuthController extends Controller
{


    public function login()
    {
        view('home/header');
        view('home/login');
        view('home/footer');
    }

    public function register()
    {
        view('home/header');
        view('home/register');
        view('home/footer');
    }

    public function registerUser() 
    {


        $email  = $this->request('email');
        $pass   = $this->request('password');

        $db = Database::connect();

        $cari = $db->query("SELECT * FROM users WHERE user_mail='{$email}'");
        if($cari->num_rows > 0) {

            Redirect::with('error', 'Email sudah digunakan')
                ->to(base_url('?pagename=register'));

        }


        $data = [
            'user_mail' => $this->request('email'),
            'user_pass' => $this->request('user_pass'),
            'id_role'   => 3
        ];

 

    }

    public function auth()
    {

        $username = $this->request('user_name');
        $password = md5($this->request('user_pass'));

        $db = Database::connect();

        $query_str = "
            SELECT 
                users.id_user, users.id_role, users.nama_lengkap, users.user_name,
                roles.nama_role
            FROM users 
            LEFT JOIN roles ON users.id_role = roles.id_role
            WHERE user_name='{$username}' AND user_pass='{$password}' 
        ";

        $cari = $db->query($query_str);

        //echo $query_str;

        //var_dump(($cari->fetch_array()));

        //die();

    


        // berhasil login
        if($cari->num_rows > 0) 
        {

            $_SESSION['user']       = $cari->fetch_array();
            $_SESSION['is_login']   = true;

            Redirect::to(base_url('?pagename=user-dashboard'));

        }

        // login gagal
        Redirect::with('error', 'Email sudah digunakan')
            ->to(base_url('?pagename=login'));

    }


    public function adminLogin()
    {
        //echo md5('databaru');
        view('admin/login');

    }

    public function adminLoginCheck()
    {


        $username = $this->request('username');
        $password = md5($this->request('password'));

        $db = Database::connect();

        $queryStr = "

            SELECT * FROM users 
            JOIN roles ON users.id_role = roles.id_role 
            WHERE users.user_name = '{$username}'
            AND users.user_pass = '{$password}'
            AND users.id_role = 1
        
        ";

        $query = $db->query($queryStr);

        if($query->num_rows > 0)
        {

            
            $data = $query->fetch_array();

            if($data['user_pass'] != $password)
            {

                Redirect::with('message', 'Username/Password tidak sesuai 1')
                    ->to(base_url('?pagename=admin-login'));

            }


            $_SESSION['user'] = $data;
            $_SESSION['is_login'] = 1;

            Redirect::to(base_url('?pagename=admin-dashboard'));

        }

        Redirect::with('message', 'Username/Password tidak sesuai')
            ->to(base_url('?pagename=admin-login'));
    }

}