<?php 
    require_once "../../dataBase/Connection.php";
    require_once "../../models/User.php";
    require_once "../../controllers/UserController.php";
    UserController::verifyLogin();
    include __DIR__."/../_includes/top.php";
?>
<div class="col-12 m-0 d-flex align-items-center" style="height: 77vh;">
    <div class="col-10 row col-md-6 p-2 mx-auto text-center">
        <div class="col-12 col-md-6 m-0 p-2">
            <a class="btn btn-success btn-lg " href="/company/index">Listar empresas</a>
        </div>
        <div class="col-12 col-md-6 m-0 p-2">
            <a class="btn btn-warning btn-lg" href="/company/create">Cadastrar empresa</a>
        </div>
    </div>
</div>
<?php  include __DIR__."/../_includes/bottom.php";
?>