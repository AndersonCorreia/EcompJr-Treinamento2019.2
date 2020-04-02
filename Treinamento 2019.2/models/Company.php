<?php

class Company{

    private $id;
    private $name;
    private $federation;

    public static function create($name, $federation){
    }

    public static function all(){
    }

    public function __construct($id, $name, $federation){
        $this->id = $id;
        $this->name = $name;
        $this->federation = $federation;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getFederation(){
        return $this->federation;
    }
    
    public function setId($id){
        return $this->id = $id;
    }

    public function setName($name){
        return $this->name = $name;
    }

    public function setFederation($federation){
        return $this->federation = $federation;
    }   
}