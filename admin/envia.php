<?php

include("../config/connection.php");

$stmt = $conectar->prepare("INSERT INTO posts (title, description, data, image, category) VALUES (:title, :description, :data, :image, :category)");

$title = $_POST["title"];
$data = $_POST["data"];
$description = $_POST["description"];
$category = $_POST["category"];
$arquivo = $_FILES["image"];

move_uploaded_file($arquivo["tmp_name"], "../uploads/" . $arquivo["name"]);

$image = "./uploads/" . $arquivo["name"];

$stmt->bindParam(":title", $title);
$stmt->bindParam(":description", $description);
$stmt->bindParam(":data", $data);
$stmt->bindParam(":image", $image);
$stmt->bindParam(":category", $category);
$stmt->execute();

header("Location:view2.php");
