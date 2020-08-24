<?php 

class AuthFilter {

    public function before() 
    {
        
        
        if(!isset($_SESSION['is_login'])) Redirect::to(base_url(''));


    }

    public function after() 
    {
        
    }


}