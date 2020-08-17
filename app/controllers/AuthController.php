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

    }


}