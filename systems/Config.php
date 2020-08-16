<?php 

class Config
{

    private $config = [];

    
    public function __construct($name = '') {
        $this->config = require("app/config/" . $name . ".php");     
        
    }



    public function get($name) {
        return isset($this->config[$name]) ? $this->config[$name] : '';
    }
}