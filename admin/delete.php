<?php
include ("../config/connection.php");

$stmt = $conectar->prepare("DELETE FROM posts WHERE id = :id");
$id = $_GET["id"];
$stmt->bindParam(":id", $id);
$stmt->execute();

echo "Registro Apagado";
?>