<?php

require '../app/view/layout.php';
require '../app/core/Router.php';
require '../app/core/Dev.php';

use app\core\Router;

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});
session_start();

$router = new Router;
$router->run();

?>
