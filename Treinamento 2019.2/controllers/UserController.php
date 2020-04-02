<?php 

session_start();

class UserController{

    public function check(){
            
        $email = $_POST['email'];
        $password = $_POST['password'];
        $DB = Connection::getConnection();
        $query="SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $DB->query($query);
        $user = $result->fetch_assoc();
        if($user){
            $_SESSION['user'] = $user['name'];
            header("Location: /views/admin/dashboard.php", true);
        }
        else {

            $_SESSION['erroLogin']= true;
            header("Location: /views/login.php", true);
        }
    }

    public static function verifyLogin(){

        if(!isset($_SESSION['user'])){
            header("Location: /views/login.php",true);
        }
    }

    public static function logout(){

        $_SESSION['user']=null;
        $_SESSION['erroLogin']= null;
        header("Location: /views/home.php");
    }
}