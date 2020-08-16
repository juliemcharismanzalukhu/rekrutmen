<?php 


class Views 
{

    public function view($name, $data = [])
    {
        extract($data);
        require_once 'app/views/' . $name . '.php';
    }

    public function include()
    {

    }

    public function extend()
    {

    }

}