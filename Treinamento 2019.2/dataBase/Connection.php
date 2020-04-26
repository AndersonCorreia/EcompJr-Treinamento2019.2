<?php

abstract class Connection{
    private static $connection;
    
    public static function getConnection(){
        if(!self::$connection){
            self::$connection = new \mysqli("localhost", "root", "", "backend");
        }
        return self::$connection;
    }

}