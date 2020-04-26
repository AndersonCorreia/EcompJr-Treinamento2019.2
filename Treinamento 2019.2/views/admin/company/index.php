<?php
    require_once "../../../dataBase/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    require_once "../../../models/Company.php";
    require_once "../../../controllers/CompanyController.php";
    UserController::verifyLogin();
    include __DIR__."/../../_includes/top.php";
?>
<div class="col-12 m-0 d-flex align-items-center" style="height: 77vh;">
    <div class="col-11 col-md-8 p-2 mx-auto bg-white border border-secondary rounded">
        <div class="col-12 text-primary text-center">
            TODAS AS EMPRESAS CADASTRADAS
        </div>
        <?php
            $companys = CompanyController::all();
            foreach ($companys as $company) {
        ?>
        <div class="col-11 col-md-6 p-2 mx-0 my-2 bg-white border border-secondary rounded">
            <?php
                echo $company->getName();
                echo " | ";
                echo $company->getFederation();
                echo "<br>";
            }
            ?>
            <a class="btn btn-warning mx-2" href="/company/edit/<?php echo $company->getId()?>">
                editar
            </a>
            <a class="btn btn-danger mx-2" href="/company/delete/<?php echo $company->getId()?>">
                excluir
            </a>
        </div>
    </div>
</div>
<?php  include __DIR__."/../../_includes/bottom.php";
?>