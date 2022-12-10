<?php
include "config/connection.php";
include "nav.php";
$cat = $_GET["cat"];

$stmt = $conectar->prepare("SELECT id, title, image, description, data FROM posts WHERE category = :cat");

$stmt->execute(array("cat" => $cat));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

<?php foreach ($results as $post) : ?>
    <h1><?= $post["title"] ?></h1>
    <p><img src="<?= $post["image"] ?>" class="card-img-top" alt="..."></p>
    <p><?= $post["description"] ?></p>
    <p><?= date('d/m/Y', strtotime($post["data"])); ?></p>
<?php endforeach; ?>