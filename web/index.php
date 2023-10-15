<?php

use Anse\Controllers\TacheController;
use Anse\Helpers\Router;

require_once "../vendor/autoload.php";

$router = new Router();

$router->addRoute("/", TacheController::class, "index");

$router->route();
