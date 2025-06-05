<?php
/*echo (__FILE__);
echo dirname(__FILE__);*/

//variable du chemin d'acces du projet depuis la racine
$base_path =  dirname(__FILE__);

// variable chemin de init.php
$php_self = $_SERVER['PHP_SELF'];

// localhost
$http_host = $_SERVER['HTTP_HOST'];

// url du projet
$http_path = $http_host.(dirname($php_self)).'/';

// url vers le inc
$inc_path = $base_path.'/inc';

// url vers le style css
$css_path = $base_path.'/css';

    // Directory application path
    $inc_path = $base_path.'/inc';
    $controller = $base_path.'/controller';
    $css_path = $base_path.'/css';
    $templates_path = $base_path.'/templates';
    $db_path = $base_path.'/BD';
    $bean_path = $base_path.'/bean';

// global variable
define('_CSS_PATH_', $css_path);
define('_BEAN_PATH_', $bean_path);


    require_once $db_path.'/DataBase.php';
    //connect to database
    $db = new DataBase();
    $connexion = $db->connect();

 /*ucfirst : permet de mettre la premiere lettre d'une chaine de caractere en maj
   <?php echo $title?> == <?= title ?> */
?>