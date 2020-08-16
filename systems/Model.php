<?php 



class Model {

    public $table = '';
    public $primaryKey = '';
    public $db;

    public $queryStr = "";
    
    public $where = [];
    public $joins = [];

    public $find = [];

    public $select = "*";

    private $_instance = null;

    public function __get($name) 
    {
        return isset($this->{$name}) ? $this->{$name} : '';
    }

    private static function getInstance() {
        if(!self::$_instance) self::$_instance = new Model;
        
        return self::$_instance;
    }

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function where($key, $value)
    {
        $this->where[$key] = $value;
        return $this;
    }

    public function joins($table, $on, $position = '') 
    {
        $this->joins[] = [
            'table' => $table,
            'on' => $on,
            'position' => $position
        ];

        return $this;
    }
    
    public function getClass() {
        return get_class($this);
    }

    public function find($value) 
    {
        $this->find = $this->db->query("SELECT * FROM {$this->table} WHERE {$this->table}.{$this->primaryKey}='{$value}'")->fetch_array();

        return $this;
    }

    public function findAll() {
        return $this->db->query("SELECT * FROM {$this->table}")->fetch_all(MYSQLI_ASSOC);
    }

    public function delete() 
    {
        $id = $this->find[$this->primaryKey];
        return $this->db->query("DELETE FROM {$this->table} WHERE {$this->table}.{$this->primaryKey}='{$id}'");
    }

    public function save() 
    {

    }

    public function insert($data) 
    {

        $keys       = array_keys($data);
        $values     = array_values($data);
        $values_arr = [];

        foreach($values as $value) {
            $values_arr[] = "'{$value}'";
        }

        $this->queryStr ="INSERT INTO {$this->table}(" . implode(', ', $keys) . ") VALUES (" . implode(', ', $values_arr) .")";
        
        echo $this->queryStr;

        return $this->db->query( $this->queryStr );
    }

    public function update($data)
    {

        $id = $this->find[$this->primaryKey];

        $dataArr = [];

        foreach($data as $key => $value) {
            if($key != $this->primaryKey) $dataArr[] = "{$key}='{$value}'";
        }

        $this->queryStr = "UPDATE {$this->table} SET " . implode(', ', $dataArr) . " WHERE {$this->table}.{$this->primaryKey} = '{$id}';";

        return $this->db->query($this->queryStr);
    }

    public function get() {
        return $this->find;
    }

    public function paginate($limit) {
        $perPage = isset($_GET['per_page']) ? $_GET['per_page'] : 0;
        $this->queryStr = "SELECT {$this->select} FROM {$this->table} LIMIT {$perPage}, {$limit}";

        return $this
            ->db
            ->query($this->queryStr)
            ->fetch_all(MYSQLI_ASSOC);

    }


    public function pager() {

    }

}