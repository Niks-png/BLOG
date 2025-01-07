<?php

require "Database.php";
require "function.php";
$config=require("config.php");
//Merkis uztaisit filtru 
//izvaidot meklesanas joslu kurai ir submit poga
//sarakstit php
//atgriest datus no sql datu bazes
// dd("SELECT * FROM posts WHERE content LIKE '%" . $_GET["serch_query"] . "%';" );
$db = new Database($config["database"]);

$select ="SELECT * FROM posts";
 if(isset($_GET["serch_query"]) && $_GET["serch_query"] !=""){
     echo"atgriest ierakstus";
     $serch_query= "%" . $_GET["serch_query"] . "%";
     $select .= " WHERE content LIKE :nosaukums";
     $c_ram = ["nosaukums"=>$serch_query]; 
}
              $posts = $db->query($select, $c_ram)->fetchAll();;

echo"<h1>Blogs</h1>";
echo"<form >";
echo"<input name='serch_query' />";
echo"<button>poga</button>";
echo"</form>";

if(count ($posts)==0){
echo"nav atrasts";
}

//dd($posts[0]["content"]);
echo"<ul>";
foreach($posts as $pos){
        echo "<li>" . $pos ["content"] . "</;i>";

    }
echo"</ul>";

