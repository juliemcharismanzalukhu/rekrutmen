<?php 

class Routes 
{

    private $routes = [];
    private $post = [];

    
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
            
            (new $route_arr[0])->{$route_arr[1]}(...array_values($url));

        } else {
            die('page not exists');
        }

    }


    public function add($name, $action) {
        $this->routes[$name] = $action;
        return $this;
    }



}

?>
