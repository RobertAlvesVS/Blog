<?php
include "session.php";
include "header.php";
?>

<main class="col-md-9 col-lg-10">
    <div class="container-fluid">
        <h1><strong>Cadastrar Usuario</strong></h1>
        <form action="card_userOK.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nome de Usuario" name="nome" required="">
                <label for="floatingInput">Usuário</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Login de Usuario" name="login" required="">
                <label for="floatingInput">Login</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Senha de Usuario" name="senha" required="">
                <label for="floatingInput">Senha</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</main>

<?php include "footer.php"; ?>