<?php
include("../config/connection.php");

$stmt = $conectar->prepare("INSERT INTO cards (image, text, category) VALUES (:image, :text, :category)");

$arquivo = $_FILES["image"];
$text = $_POST["text"];
$category = $_POST["category"];

move_uploaded_file($arquivo["tmp_name"], "../uploads/" . $arquivo["name"]);

$image = "./uploads/" . $arquivo["name"];

$stmt->bindParam(":image", $image);
$stmt->bindParam(":text", $text);
$stmt->bindParam(":category", $category);

$stmt->execute();

header("Location:insert.php");
