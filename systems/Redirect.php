<?php 

class Redirect
{

    
    private static $_instance = null;

    public static function instance() {
        if(!self::$_instance) self::$_instance = new self;
    }


    public static function to($name) 
    {
        header('location: ' . $name);
        exit;
    }

    public static function with($key, $value) 
    {

        $_SESSION[$key] = $value;

        return new self;
    }

}