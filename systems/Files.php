<?php 

class Files 
{

    private $files = [];


    public function __construct() 
    {
        $this->files = $_FILES;
    }

    public function get( $name ) 
    {
        if($this->has($name)) return $this->files[$name];

        return false;
    }

    public function has( $name ) 
    {

        if(isset($this->files[$name])) {
            return true;
        }
        return false;

    }

    public function upload($name)
    {

        if($this->has($name)) return move_uploaded_file($this->get($name)['tmp_name'], 'uploads/' . $this->get($name)['name']);

        return false;
    }




}