<?php
echo "HELLO SIGMA !!!";

require "function.php";
//1. ielagonas
//publicet-savienat ar data base




//data spurce name
$dsn="mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";

//PFO- PHP data object
$pdo= new PDO($dsn);

//1. sagatavot vaicajumu (statement)

$statement = $pdo->prepare("SELECT * FROM posts");

$statement->execute();

$posts = $statement->fetchAll();

dd($posts);

function dd($data){
    echo"<pre>";
    var_dump($data);
    echo"</pre>";
    die();
};