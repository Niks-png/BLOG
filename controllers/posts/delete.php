<?php
if(isset($_GET["id"])){
    $sql = "SELECT * FROM posts
            WHERE id = :id";

    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();
}