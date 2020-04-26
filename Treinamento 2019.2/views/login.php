<?php session_start(); 

include __DIR__."/_includes/top.php";
?>
<div class="col-12 m-0 d-flex align-items-center" style="height: 77vh;">
    <div class="col-10 col-md-4 p-2 mx-auto bg-white border border-secondary rounded">
        <form action="/user/check" method="post">
            <?php 
                if(isset($_SESSION['erroLogin'])){
            ?>        
                <span style="color: red;"> Erro ao fazer o login</span><br>
            <?php
                }
            ?>
            <div class="form-group">
              <label for="exampleInputEmail1">Endereço de email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
              <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>        
        </form>
    </div>
</div>
<?php  include __DIR__."/_includes/bottom.php";
?>