<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body >
<div class="container-fluid row m-0 p-0 bg-white" style="height: 12vh;" >
    <div class="col-4 pl-5 p-1 m-0" style="height: 95%;">
        <a href="/">
            <img src="https://www.brasiljunior.org.br/static/logo-brasil-junior.png" style="height: 100%;" alt="logo da brasil junior" >
        </a>
    </div>
    <div class="col-8 p-2 pr-md-5 m-0">
        <?php
            if(isset($_SESSION['user'])){
        ?>
        <div class="float-right mr-5 mt-3">
            <a class="btn btn-warning btn-sm" href="/views/admin/dashboard.php">Dashboard</a>
            <a class="btn btn-warning btn-sm" href="/user/logout">Sair</a>
        </div>
        <?php
            }else{
        ?>
        <a class="btn btn-warning btn-sm float-right mr-5 mt-3" href="/home/login">Login</a>
        <?php
            }
        ?>
    </div>
    <hr class="m-0 p-0 col-12" color="green" style="height: 4%;">
</div>
<div class="bg-light row container col m-0 p-0">
    