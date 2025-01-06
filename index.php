<?php

require "Database.php";
require "function.php";
$config=require("config.php");
//Merkis uztaisit filtru 
//izvaidot meklesanas joslu kurai ir submit poga
//sarakstit php
//atgriest datus no sql datu bazes

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();;
var_dump($_GET["serch_query"]);
 if(isset($_GET["serch_query"]) && $_GET["serch_query"] !=""){
     echo"atgriest ierakstus";
     $posts =$db->query("SELECT * FROM posts WHERE content LIKE'%" . $_GET["serch_query"] . "%';")->fetchAll();
}
echo"<h1>Blogs</h1>";
echo"<form >";
echo"<input name='serch_query' />";
echo"<button>poga</button>";
echo"</form>";

//dd($posts[0]["content"]);
echo"<ul>";
foreach($posts as $pos){
        echo "<li>" . $pos ["content"] . "</;i>";

    }
echo"</ul>";

