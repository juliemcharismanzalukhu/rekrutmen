<?php 


class FrontendController extends Controller 
{

    public function index() {
        view('home/homepage');
    }

    public function cariLoker() {
        view('home/cari-loker');
    }

}