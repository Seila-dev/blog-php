<?php 

session_start(); 

require "../../app/core/init.php";


$url = $_GET['url'] ?? 'home';
$url = explode("/", $url);  

$page_name = trim($url[0]);
$filename = "./" .$page_name. ".php";

if(file_exists($filename)){
    require_once $filename;
} else {
    require_once "./404.php";
}
?>