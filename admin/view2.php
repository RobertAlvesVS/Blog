<?php
include("../config/connection.php");
include "session.php";

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

include "header.php"; ?>
<main class="col-md-9 col-lg-10">
    <div class="container">
        <h1 id="main-title">Meus Posts</h1>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">id</td>
                    <td scope="row">Titulo</td>
                    <td scope="row">Descrição</td>
                    <td class="actions">
                        <i class="bi bi-eye-fill">Ver</i>
                        <i class="bi bi-pencil">Editar</i>
                        <i class="bi bi-x-square-fill">Excluir</i>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <?php foreach ($results as $post) : ?>
                    <tr>
                        <td scope="row"><?= $post["id"] ?></td>
                        <td scope="row"><?= $post["title"] ?></td>
                        <td scope="row"><?= $post["description"] ?></td>
                        <td class="action" id="icon">
                            <a href="viewBlog.php?id=<?= $post["id"] ?>"><i class="bi bi-eye-fill icon"></i></a>
                            <a href="editar.php?id=<?= $post["id"] ?>"><i class="bi bi-pencil icon"></i></a>
                            <a href="delete.php?id=<?= $post["id"] ?>"><i class="bi bi-x-square-fill icon"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
<?php include "footer.php"; ?>