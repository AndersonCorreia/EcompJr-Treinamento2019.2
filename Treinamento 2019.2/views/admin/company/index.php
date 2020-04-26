<?php
    require_once "../../../dataBase/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    require_once "../../../models/Company.php";
    require_once "../../../controllers/CompanyController.php";
    UserController::verifyLogin();
    include __DIR__."/../../_includes/top.php";
?>
<div class="col-12 m-0" style="height: 77vh;">
    <div class="col-11 row col-md-8 p-2 mx-auto bg-body">
        <div class="col-12 col-md-11 mt-2 mb-4 m-0 pr-md-3 p-2 text-center text-primary" style="font-size: 1.5em;">
            <b>TODAS AS EMPRESAS CADASTRADAS</b>
        </div>
        <?php
            $companys = CompanyController::all();
            foreach ($companys as $company) {
        ?>
        <div class="col-12 col-md-5 p-2 m-3 mx-auto mx-md-3 bg-white border border-secondary rounded">
            <?php
                echo "<b>NOME: </b>".$company->getName();
                echo "<br>";
                echo "<b>FEDERAÇÃO: </b>".$company->getFederation();
            ?>
            <div class="col m-0 mt-2 px-0 p-0">
                <a class="btn btn-warning btn-sm" href="/company/edit/<?php echo $company->getId()?>">
                    editar informações
                </a>
                <a class="btn btn-danger btn-sm float-right" href="/company/delete/<?php echo $company->getId()?>">
                    excluir
                </a>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>
<?php  include __DIR__."/../../_includes/bottom.php";
?>