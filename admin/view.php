<?php
include ("../config/connection.php");

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>".$key."<strong>".$value."<br>";
    }
    echo "++++++++++++++++++++++<br>";
}
?>