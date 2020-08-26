<?php 


class FrontendController extends Controller 
{

    public function index() {
        view('home/header');
        view('home/homepage');
        view('home/footer');
    }

    public function cariLoker() {
        view('home/header');
        view('home/cari-loker');
        view('home/footer');
    }

    public function infoLoker() {
        view('home/header');
        view('home/info-loker');
        view('home/footer');
    }

}