<?php 


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

}