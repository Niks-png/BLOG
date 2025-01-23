<?php

require "Validator.php";


$errors = [];
if (!isset($_GET ["id"])){
    echo"nav padots id";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(!Validator::string($_POST["content"], max: 50)){

        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";

}
   
    if (empty($errors)){
        
        $params = ["content" => $_POST["content"]];
        $sql = "INSERT INTO posts (content)  WHERE id = :id (:content)";
        $sql = "UPDATE posts 
          SET content = content"
      
        $post = $db->query($sql, $params)->fetch();
        header("Location: /");
       
    }
    
}



require "views/posts/edit.view.php";