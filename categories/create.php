<?php
 require "Validator.php";


$errors = [];



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(!Validator::string($_POST["content"], $min=3, $max= 25)){

        $errors["content"] = "Min 3 rakstzimes, bet ne garākam par 25 rakstzīmēm";

}
   
    if (empty($errors)){
        
        $params = ["categ_content" => $_POST["categ_content"]];
        $sql = "INSERT INTO posts (categ_content) VALUES (:categ_content)";
        $post = $db->query($sql, $params)->fetch();
        header("Location: /");
       
    }
    
}