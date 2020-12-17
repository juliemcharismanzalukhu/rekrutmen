<?php 

class DashboardController extends Controller
{

    public function index() 
    {

        view('admin/header');
        view('admin/dashboard');
        view('admin/footer');

    }

    public function logout()
    {

        if(session()->get('is_login')) 
        {

            session()->forget('user');
            session()->forget('is_login');  

            Redirect::to("?pagename=admin-login");

        }

        Redirect::to("?pagename=admin-login");

    }

   
}