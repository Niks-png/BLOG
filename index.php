<?php
echo "HELLO SIGMA !!!";
require "Database.php";
require "function.php";
$config=require("config.php");

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();;


//dd($posts[0]["content"]);
echo"<ul>";
foreach($posts as $pos){
        echo "<li>" . $pos ["content"] . "</;i>";

    }
echo"</ul>";

