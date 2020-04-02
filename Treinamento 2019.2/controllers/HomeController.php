<?php 

class HomeController{

    public function login(){

        header("Location: /views/login.php");
    }

    public function index(){

        header("Location: /views/home.php");
    }
}