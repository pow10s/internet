<?php
include('autoloader/Autoload.php');
include('config.php');
Autoloader\Autoload::autoloadRegister();
$router = new \libs\Router();
$router->run();

