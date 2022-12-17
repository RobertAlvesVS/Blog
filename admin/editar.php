<?php
include("../config/connection.php");
include "session.php";
include "header.php";

$id = $_GET["id"];
$stmt = $conectar->prepare("SELECT id, title, description FROM posts WHERE id = :id");
$stmt->execute(array("id" => $id));
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="col-md-9 col-lg-10">
    <h1><strong>Editar Post</strong></h1>
    <form action="editar-fim.php" method="post">
        <?php foreach ($results as $post) : ?>
            <div class="form-floating mb-3">
                <input type="hidden" class="form-control" id="floatingInput" value="<?= $post["id"] ?>" name="id">
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" value="<?= $post["title"] ?>" name="title">
                <label for="floatingInput">Titulo</label>
            </div>
            <div class="form-floating">
                <input class="form-control" id="floatingTextarea2" value="<?= $post["description"] ?>" style="height: 100px" name="description"></input>
                <label for="floatingInput">Descrição</label>
            </div>
        <?php endforeach; ?>
        <br>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</main>
<?php
include "footer.php";
?>