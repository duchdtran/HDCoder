<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/hdcoder');
define('BASE_URL_ADMIN', 'http://localhost/hdcoder/admin');

function dd($value)
{
    echo "<pre>",  print_r($value, true), "</pre>";
    die();
}

// Process URL from browser
require_once "./mvc/core/App.php";

// How controllers call Views & Models
require_once "./mvc/core/Controller.php";

// Connect Database
require_once "./mvc/core/DB.php";
?>