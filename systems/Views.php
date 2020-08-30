<?php 


class Views 
{

    private $extend;
    private $current_section;

    public function __construct()
    {
    }

    public function view($name, $data = [])
    {
        extract($data);
        require_once 'app/views/' . $name . '.php';

        return $this;
    }


    public function extend($name) {
        $extend =  isset($this->extend[$name]) ? $this->extend[$name] : false;
        return $this;
    }


    public function section($name) 
    {
       
        $this->current_section = $name;
        ob_start();
   
    }


    public function endSection() 
    {
        
        $html = ob_get_clean();
        //$this->extend[$this->current_section] = $html;
        
        echo $html;

    }

}