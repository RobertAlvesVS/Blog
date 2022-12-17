<?php
include("config/connection.php");

$buscar = $_POST["buscar"];

$stmt = $conectar->prepare("SELECT * FROM posts WHERE title LIKE '%$buscar%'");

$stmt->execute();
$search = $stmt->fetchAll();

include "nav.php";
?>
<div class="container">
    <h2>É isso que você procura?</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($search as $key => $value) : ?>
            <div class="col gy-5">
                <div class="card">
                    <img src="<?= $value["image"] ?>" class="card-img-top" alt="Fotinha">
                    <div class="card-body">
                        <h5 class="card-title"><?= $value["title"] ?></h5>
                        <p class="card-text"><?= $value["description"] ?></p>
                        <a href="viewPost.php?id=<?= $value["id"] ?>"><i class="fas fa-eye check-icon">Ver</i></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include "footer.php"; ?>