<?php
include "config/connection.php";
include "nav.php";
$cat = $_GET["cat"];

$stmt = $conectar->prepare("SELECT id, title, image, description, data FROM posts WHERE category = :cat");

$stmt->execute(array("cat" => $cat));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

<div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($results as $post) : ?>
                <div class="col gy-5">
                    <div class="card">
                        <img src="<?= $post["image"] ?>" class="card-img-top" alt="Fotinha">
                        <div class="card-body">
                            <h5 class="card-title"><?= $post["title"] ?></h5>
                            <p class="card-text"><?= $post["description"] ?></p>
                            <a href="viewPost.php?id=<?= $post["id"] ?>"><i class="fas fa-eye check-icon">Ver</i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include "footer.php";?>