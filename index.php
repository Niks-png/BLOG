<?php
echo "HELLO SIGMA !!!";
require "Database.php";
require "function.php";

$db = new Database();
$posts = $db->query("SELECT * FROM posts");



//dd($posts[0]["content"]);
echo"<ul>";
foreach($posts as $pos){
        echo "<li>" . $pos ["content"] . "</;i>";

    }
echo"</ul>";

