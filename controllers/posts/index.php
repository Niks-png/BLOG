<?php





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
              $style="css/style1.css";
 $pagetitle="BLOGS";
require "views/posts/index.view.php";



$y = isset($x) ? $x : "nav vertibas";
$y = $x ?? "nav vertibas";