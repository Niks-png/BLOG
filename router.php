<?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
http_response_code(404);
if($uri == "/") {

    require "controler/index.php";

}
elseif ($uri == "/about") {

    require "controler/story.php";

}elseif ($uri =="/categories") {
    require "controler/categories.php";
}
else{

    http_response_code(404);
    echo "Atvainojiet, lapa netika atrasta!";
    die();
}