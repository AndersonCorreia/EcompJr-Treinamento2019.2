<?php 
    require_once "../../../dataBase/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../models/Company.php";
    require_once "../../../controllers/UserController.php";
    UserController::verifyLogin();
    $company = $_SESSION['company'];    
    unset($_SESSION['company']);    
?>

<html>
    <form action="/company/update/<?php echo $company->getId() ?>" method="post">
        <input name="name" value="<?php echo $company->getName()?>" placeholder="name">
        <input name="federation" value="<?php echo $company->getFederation()?>" placeholder="federation">          
        <button type="submit"> Salvar </button>
    </form>
</html>