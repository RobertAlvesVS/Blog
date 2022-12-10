<?php
include("../config/connection.php");
include "session.php";

$id = $_GET["id"];

$stmt = $conectar->prepare("SELECT id, title, description FROM posts WHERE id = :id");

$stmt->execute(array("id" => $id));

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

include "header.php";
?>

<main class="col-md-9 col-lg-10">
    <div class="container">
        <h1 id="main-title">Editar Post</h1>
    </div>
</main>

<form action="editar-fim.php" method="post" enctype="multipart/form-data">
    <?php foreach ($results as $post) : ?>
        <p><input type="hidden" value="<?= $post["id"] ?>" name="id"></p>
        <p><input type="text" value="<?= $post["title"] ?>" name="title"></p>
        <p><input type="text" value="<?= $post["description"] ?>" name="description"></p>
    <?php endforeach; ?>
    <input type="submit" value="EDITAR">
</form>

<?php
include "footer.php";
?>