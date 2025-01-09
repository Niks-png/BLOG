
<?php
require "Database.php";

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
echo"</ul>";
$style="css/style1.css";
$pagetitle="idk";
require "views/categories.view.php";
?>
