<?php

require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nosaukums"]) && isset($_POST["autors"]) && isset($_POST["gads"]) && isset($_POST["id"])) {

    $query = "UPDATE books
              SET nosaukums = :nosaukums, autors = :autors, gads = :gads
              WHERE id = :id";
    $params = [
        ":nosaukums" => $_POST["nosaukums"],
        ":autors" => $_POST["autors"],
        ":gads" => $_POST["gads"],
        ":id" => $_POST["id"],
    ];
    $db->execute($query, $params);

    header("Location: /");
    die();
}

$query = "SELECT * FROM books WHERE id = :id";
$params = [":id" => $_GET["id"]];
$post = $db->execute($query, $params)->fetch();


$title = "Edit book";
require "views/edit.view.php";
