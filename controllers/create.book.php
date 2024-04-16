<?php

require "Database.php";
$config = require("config.php");
$db = new Database($config);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors = [];
  
    $query = "INSERT INTO books (nosaukums, autors, gads, pieejamiba)
              VALUES (:nosaukums, :autors, :gads, :pieejamiba);";
    $params = [
        ":nosaukums" => $_POST["nosaukums"],
        ":autors" => $_POST["autors"],
        ":gads" => $_POST["gads"],
        ":pieejamiba" => $_POST["pieejamiba"]
    ];
    $db->execute($query, $params);

    header("Location: /");
    die();

  
}

$title = "Create Book";
require "views/create.book.view.php";