<?php

if ($_SERVER["REQUEST_METHOD"] == "POSTS"){
   
    $params = ["content" => $_POST["content"]];
    $sql = "INSERT INTO posts (content) VALUES (:content)";
    $post = $db->query($select, $params)->fetch();
    header("Location: /");
}
require "views/posts/create.view.php";

