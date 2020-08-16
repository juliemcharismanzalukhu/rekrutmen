<?php 


class Database 
{

    public static function connect() 
    {

        
        return new mysqli(
            config('database.host'), 
            config('database.user'), 
            config('database.pass'), 
            config('database.db')
        );
    }
}