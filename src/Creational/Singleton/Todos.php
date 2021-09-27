<?php

namespace NDC\Creational\Singleton;

class Todos{
    private $todos = array();
    private static $instance = null;

    public function __construct(){}
    public function __clone(){}

    static function getInstance(){
        if(self::$instance == NULL)
            self::$instance = new Todos();
        return self::$instance;
    }

    function setTodos($todos){
        $this->todos = $todos;
    }

    function addItem($todo){
        array_push($this->todos, $todo);
    }

    function getTodos(){
        return $this->todos;
    }
}