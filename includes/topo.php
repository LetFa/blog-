<?php
    session_start();
?>

<div class="card bg-danger">
    <div class="card-header">
        <h1 class="text-light"> Projeto Blog em PHP + MYSQL IFSP - MURILO</h1>
    </div>
    <?php if(isset($_SESSION["login"])): ?>
    <div class="card-body text-right text-light">
        Olá <?php echo $_SESSION['login']['usuario']['nome']?>!
        <a href="core/usuario_repositorio.php?acao=logout"
            class="btn btn-link btn-sm" role="button">Sair</a>
    </div>
    <?php endif ?>
</div>