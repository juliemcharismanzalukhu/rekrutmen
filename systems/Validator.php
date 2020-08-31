<?php 

class Validator {

    private $rules  = [];
    private $errors = [];
    private $data   = [];

    public function setData($data) {
        $this->data = $data;
        return $this;
    }

    public function setRules($rules) 
    {

        $this->rules = $rules;
        return $this;

    }

    public function runRules()
    {

        foreach($this->rules as $key => $value) 
        {

        
            $rules_arr = explode('|', $value);

            foreach($rules_arr as $rule)
            {
                $this->rule($key, $rule);
            }


        }

    }


    public function rule($name, $rule)
    {


        switch($rule) {

            case 'required':

                if(empty(trim($this->data[$name]))) $this->addError($name, 'Harus di isi');

            break;


        }

    }


    public function addError($name, $error) {
        $this->errors[] = [ $name => $error ];
        return $this;
    }

    public function getErrors() {
        return $this->errors;
    }


    public function isError() {
        return (count($this->errors) > 0);
    }




}