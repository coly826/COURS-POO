
<?php


use Router\Router;
// use Exceptions\RouteNotFoundException;
use Source\App;

require './../vendor/autoload.php';

define('BASE_VIEW_PATH', dirname( __DIR__ ) . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR);

$router = new Router();
$router->register('/', ['Controllers\HomeController', 'index']);


(new App($router, $_SERVER['REQUEST_URI']))->run();


 

?>