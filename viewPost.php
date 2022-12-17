<?php
include("config/connection.php");
include "nav.php";
$id = $_GET["id"];
$stmt = $conectar->prepare("SELECT * FROM posts WHERE id = :id");
$stmt->execute(array("id" => $id));
$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<?php foreach ($results as $post) : ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1"><?= $post["title"]  ?></h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Postado em <?= date("d/m/Y", strtotime($post["data"])); ?> por Robert Alves</div>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!"><?= $post["category"] ?></a>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="<?= $post["image"] ?>" alt="<?= $post["title"] ?>" /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4"><?= $post["description"] ?></p>
                    </section>
                </article>
            </div>
        </div>
    </div>
    </div>
    </div>
<?php endforeach; ?>

<?php include "footer.php"; ?>