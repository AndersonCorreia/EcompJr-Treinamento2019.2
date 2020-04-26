<?php 
    require_once "../../../dataBase/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../models/Company.php";
    require_once "../../../controllers/UserController.php";
    UserController::verifyLogin();
    $company = $_SESSION['company']; 
    include __DIR__."/../../_includes/top.php";
?>
<div class="col-12 m-0 d-flex align-items-center" style="height: 77vh;">
    <div class="col-10 col-md-4 p-2 mx-auto bg-white border border-secondary rounded">
        <form action="/company/update/<?php echo $company->getId() ?>" method="post">
            <div class="form-group">
                <label for="name">Nome</label>
                <input name="name" id="name" class="form-control" value="<?php echo $company->getName()?>" placeholder="name">
            </div>
            <div class="form-group">
                <label for="federation">Federação</label>
                <input id="federation" name="federation" class="form-control" value="<?php echo $company->getFederation()?>" placeholder="federation">
            </div>          
            <button type="submit" class="btn btn-success"> Salvar </button>
        </form>
    </div>
</div>
<?php  include __DIR__."/../../_includes/bottom.php";
?>