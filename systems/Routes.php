<?php 

class Routes 
{

    private $routes = [];
    private $post = [];
    private $filters = [];
    
    public function __construct()
    {
    }
    

    public function run($url) 
    {

        require_once 'app/config/routes.php';
        
        $pagename = isset($url['pagename']) ? $url['pagename'] : '';

        if(in_array($pagename, array_keys($this->routes))) {

            
            $route = $this->routes[$pagename];


            $route_arr = explode('@', $route);

            require_once 'app/controllers/' . $route_arr[0] . '.php';

            unset($url['pagename']);
            
            $this->beforeRoute($pagename);

            (new $route_arr[0])->{$route_arr[1]}(...array_values($url));
            
            $this->afterRoute($pagename);
            
           

        } else {
            die('page not exists');
        }

    }


    public function add($name, $action, $filters = []) {

        $this->routes[$name]    = $action;
        $this->filters[$name]   = $filters;
        
        return $this;

    }

    public function beforeRoute($pagename)
    {
        $filters = $this->filters[$pagename];

        foreach($filters as $filter){
            require 'app/filters/' . $filter . '.php';
            (new $filter)->before();
        }

    }

    public function afterRoute($pagename) {
        $filters = $this->filters[$pagename];

        foreach($filters as $filter) 
        {
            require 'app/filters/' . $filter . '.php';
            (new $filter)->after();
        }
    }



}

?>
