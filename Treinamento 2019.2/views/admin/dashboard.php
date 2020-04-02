<?php 
    require_once "../../dataBase/Connection.php";
    require_once "../../models/User.php";
    require_once "../../controllers/UserController.php";
    UserController::verifyLogin();
    echo "Olá ".$_SESSION['user'];
?>
<a href="/user/logout">Sair</a>

<br>
<br>
<div>
    <a href="/company/index">Listar empresas</a>
    <a href="/company/create">Cadastrar empresa</a>
</div>