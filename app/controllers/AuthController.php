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

        var_dump($_POST);

        $email = $this->request('email');
        $pass = $this->request('password');

        $db = Database::connect();

        $cari = $db->query("SELECT * FROM users WHERE user_mail='{$email}'");
        if($cari->num_rows > 0) {

            Redirect::with('error', 'Email sudah digunakan')
                ->to(base_url('?pagename=register'));

        }


        $data = [
            'user_mail' => $this->request('email'),
            'user_pass' => $this->request('user_pass')
        ];

 

    }


}