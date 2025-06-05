<?php
include 'init.php';
//require 'templates/Form.php';
$content = 'inc/home.php';
$title = 'home';

if (isset($_GET['nav'])) {
    $file = 'inc/'.$_GET['nav'].'.php';
    if (file_exists($file)) {
        $content = $file;
        $title = $_GET['nav'];
    }else{ 
        $content = 'inc/error.php';
        $title = 'error';  
    }
}

require 'inc/header.php';
require 'inc/nav.php';
require $content;
require 'inc/footer.php';


?>