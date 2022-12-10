<?php
include "session.php";
include "header.php";
?>

<form action="card_userOK.php" method="post" class="col-md-9 col-lg-10">
    <div class="mb-3">
        <label class="form-label">Digite o nome de usuario</label>
        <input type="text" class="form-control" name="nome">
    </div>
    <div class="mb-3">
        <label class="form-label">Digite o Login do usuario</label>
        <input type="text" class="form-control" name="login">
    </div>
    <div class="mb-3">
        <label class="form-label">Digite a Senha do Usuario</label>
        <input type="text" class="form-control" name="senha">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-dark">Cadastrar Usuario</button>
    </div>
</form>