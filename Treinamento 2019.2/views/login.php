<?php
    session_start(); 
?>
<html>
    <?php 
        if(isset($_SESSION['erroLogin'])){
    ?>        
        <span style="color: red;"> Erro ao fazer o login</span>
    <?php
        }
    ?>

    <form action="/user/check" method="post">
        <input name="email" placeholder="email">        
        <input name="password" placeholder="password">
        <button type="submit"> Entrar </button>        
    </form>
</html>