<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
         <script src="https://cdn.tailwindcss.com"></script>
</head>
        <body>
<?php
require "Database.php";
require "function.php";
$config=require("config.php");


$c_ram = []; 
$db = new Database($config["database"]);
$select ="SELECT * FROM categories";
if(isset($_GET["serch_query"]) && $_GET["serch_query"] !=""){
        $serch_query= "%" . $_GET["serch_query"] . "%";
        $select .= " WHERE category_name  LIKE :nosaukums";
        $c_ram = ["nosaukums"=>$serch_query]; 
}
                $posts = $db->query($select, $c_ram)->fetchAll();;

echo"<form >";
echo"<input class=' mt-5 ml-5 rounded border-2 border-black' name='serch_query' />";
echo"<button class='rounded border-2 border-black';>poga</button>";
echo"</form>";

if(count ($posts)==0){
echo"nav atrasts";
}

//dd($posts[0]["content"]);
echo"<ul>";
foreach($posts as $pos){
echo "<li>" . $pos ["category_name"] . "</;i>";

}
echo"</ul>";
require "categories.view.php"
?>
            </body>
</html>
