<?php 
    require_once "../../../dataBase/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    UserController::verifyLogin();    
    include __DIR__."/../../_includes/top.php";
?>
<div class="col-12 m-0 d-flex align-items-center" style="height: 77vh;">
    <div class="col-10 col-md-4 p-2 mx-auto bg-white border border-secondary rounded">
        <form action="/company/store" method="post">
            <div class="form-group">
                <label for="name">Nome</label>
                <input name="name" id="name" class="form-control" placeholder="name">
            </div>
            <div class="form-group">
                <label for="federation">Federação</label>
                <input id="federation" name="federation" class="form-control" placeholder="federation">
            </div>          
            <button type="submit" class="btn btn-primary"> Cadastrar</button>
        </form>
    </div>
</div>
<?php  include __DIR__."/../../_includes/bottom.php";
?>