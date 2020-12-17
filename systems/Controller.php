<?php 

class Controller {
    
    public function view() {
        return new View();
    }

    public function request($name = '') {
        

        $input = [];
        
        
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $input = $_GET;
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST;
        }

        
        if(!$name) return $input;

        return isset($input[$name]) ? $input[$name] : '';
    }

    public function getFile( $name ) {
        return isset($_FILES[$name]) ? $_FILES[$name] : false;
    }


    
    public function validate($data) {

        

    }

}