<?php
declare(strict_types=1);
use App\Core\Router;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$route = new Router();

$route->routeRequest();