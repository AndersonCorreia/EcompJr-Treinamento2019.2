<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h class="container-fluid row m-0 p-0 bg-white">
    <div class="col-6 ml-5 pl-5 p-1 m-0">
        <img src="https://www.brasiljunior.org.br/static/logo-brasil-junior.png" style="height: 10vh;" alt="logo da brasil junior" >
    </div>
    <div class="col p-2 pr-md-5 m-0">
        <?php
            if(isset($_SESSION['user'])){
        ?>
        <a class="btn btn-warning btn-sm float-right mr-5 mt-3" href="/views/admin/dashboard.php">Dashboard</a>
        <?php
            }else{
        ?>
        <a class="btn btn-warning btn-sm float-right mr-5 mt-3" href="/home/login">Login</a>
        <?php
            }
        ?>
    </div>
    <hr class="m-0 p-0 col-12" color="green" style="height: 0.2em;"></h>
</h>
<div class="bg-light row container col m-0 p-0">
    