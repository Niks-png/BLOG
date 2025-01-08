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
$c_ram=[];
$select ="SELECT * FROM posts";
 if(isset($_GET["serch_query"]) && $_GET["serch_query"] !=""){
     echo"atgriest ierakstus";
     $serch_query= "%" . $_GET["serch_query"] . "%";
     $select .= " WHERE content LIKE :nosaukums"; //sagatavo vaicajumus
     $c_ram = ["nosaukums"=>$serch_query]; //parametrs
}
              $posts = $db->query($select, $c_ram)->fetchAll();
require "views/index.view.php";



$y = isset($x) ? $x : "nav vertibas";

$y = $x ?? "nav vertibas";