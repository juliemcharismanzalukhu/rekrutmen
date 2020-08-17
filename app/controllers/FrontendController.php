<?php 


class FrontendController extends Controller 
{

    public function index() {
        view('home/header');
        view('home/homepage');
        view('home/footer');
    }

    public function cariLoker() {
        view('home/cari-loker');
    }

}