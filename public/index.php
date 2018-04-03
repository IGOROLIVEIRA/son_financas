<?php
use SONFin\Application;
use SONFin\Plugins\RoutePlugin;
use SONFin\ServiceContainer;
use Psr\Http\Message\ServerRequestInterface;
use \Zend\Diactoros\Response;
use \SONFin\Plugins\ViewPlugin;
use \SONFin\Plugins\DbPlugin;
use \SONFin\Plugins\AuthPlugin;
use SONFin\Models\CategoryCost;

require_once  __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/helpers.php';


$routerContainer = new ServiceContainer();
$app = new Application($routerContainer);

$app->plugin(new RoutePlugin());
$app->plugin(new ViewPlugin());
$app->plugin(new DbPlugin());
$app->plugin(new AuthPlugin());

$app->get('/home/{name}/{id}', function (ServerRequestInterface $request){
    $response= new Response();
    $response->getBody()->write("response com emmiter do diactoros");
    return $response;
});
require_once __DIR__ . '/../src/controllers/statements.php';
require_once __DIR__ . '/../src/controllers/category-costs.php';
require_once __DIR__ . '/../src/controllers/bill-receives.php';
require_once __DIR__ . '/../src/controllers/bill-pays.php';
require_once __DIR__ . '/../src/controllers/users.php';
require_once __DIR__ . '/../src/controllers/auth.php';

$app->start();
