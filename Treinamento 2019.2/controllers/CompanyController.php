<?php

class CompanyController{
    
    public function index(){
        header("Location: /views/admin/company/index.php");
    }

    public function create(){
        header("Location: /views/admin/company/create.php");
    }

    public function store(){

        $name = $_POST['name'];
        $federation = $_POST['federation'];
        $DB = Connection::getConnection();
        $query="INSERT INTO companys (name, federation) VALUES ('$name', '$federation')";
        $result = $DB->query($query);
        $DB->commit();
        header("Location: /views/admin/company/index.php", true);
    }

    public function edit(int $id){
        $DB = Connection::getConnection();
        $query="SELECT * FROM companys WHERE id=$id";
        $result = $DB->query($query);
        $e = $result->fetch_assoc();
        $_SESSION['company'] = new Company($e['id'], $e['name'], $e['federation']);
        header("Location: /views/admin/company/edit.php", true);
    }

    public function update(int $id){

        $name = $_POST['name'];
        $federation = $_POST['federation'];
        $DB = Connection::getConnection();
        $query="UPDATE companys SET name='$name', federation='$federation' WHERE id=$id";
        $result = $DB->query($query);
        $DB->commit();
        header("Location: /views/admin/company/index.php", true);
    }

    public function delete(int $id){

        $DB = Connection::getConnection();
        $query="DELETE FROM companys WHERE id=$id";
        unset($_SESSION['company']);   
        $result = $DB->query($query);
        $DB->commit();
        header("Location: /views/admin/company/index.php", true);
    }

    public static function all(){

        $DB = Connection::getConnection();
        $query="SELECT * FROM companys";
        $result = $DB->query($query);

        $companysArray = $result->fetch_all(MYSQLI_ASSOC);

        $companys = array_map( function ($e) {

            return new Company($e['id'], $e['name'], $e['federation']);

        }, $companysArray);

        return $companys;
    }
}