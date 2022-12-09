<?php
include("../config/connection.php");
include "session.php";

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

include "header.php"; ?>
<main>
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
                        <a href="">
                            <i class="bi bi-eye-fill">Ver</i>
                        </a>
                        <a href=""><i class="bi bi-pencil">Editar</i>
                        </a>
                        <a href="">
                            <i class="bi bi-x-square-fill">Excluir</i>
                        </a>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <?php foreach ($results as $post) : ?>
                    <tr>
                        <td scope="row"><?= $post["id"] ?></td>
                        <td scope="row"><?= $post["title"] ?></td>
                        <td scope="row"><?= $post["description"] ?></td>
                        <td class="action">
                            <a href="viewBlog.php?id=<?= $post["id"] ?>"><i class="bi bi-eye-fill">Ver</i></a>
                            <a href="editar.php?id=<?= $post["id"] ?>"><i class="bi bi-pencil">Editar</i></a>
                            <a href="delete.php?id=<?= $post["id"] ?>"><i class="bi bi-x-square-fill">Excluir</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
</div>
</div>
</body>

</html>