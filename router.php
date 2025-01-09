<?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
http_response_code(404);
if($uri==/){
    require "controler/index.php";
}