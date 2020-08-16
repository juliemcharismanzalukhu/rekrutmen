<?php 

class Sessions
{


    public function get($name)
    {
        return isset($_SESSION[$name]) ? $_SESSION[$name] : '';
    }

    public function add($name, $value)
    {

        $_SESSION[$name] = $value;
        return $this;
    }

    public function set($data) 
    {

        foreach($data as $key => $value) $this->add($key, $value);
        return $this;
    }

    public function destroy() {
        $data = $_SESSION;
        foreach($data as $key => $value) unset($_SESSION[$key]);
    }

    public function has($name) {
        if(isset($_SESSION[$name])) return true;
        return false;
    }

    public function forget($name) {
        if($this->has($name)) unset($_SESSION[$name]); return true;
        return false;
    }

}