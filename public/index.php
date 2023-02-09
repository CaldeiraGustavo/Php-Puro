<?php

use App\Routing\Request;
use App\Routing\Router;
use App\Database\Connector;
use Dotenv\Dotenv;

require '../vendor/autoload.php';

$router = new Router(new Request);

$dotenv = DotEnv::createImmutable('/var/www');
$dotenv->load();

$dbConnection = (new Connector())->getConnection();


$router->get('/', function() {
  return <<<HTML
  <h1>Hello world</h1>
HTML;
});


$router->get('/profile', function($request) {
  return <<<HTML
  <h1>Profile</h1>
HTML;
});

$router->post('/data', function($request) {

  return json_encode($request->getBody());
});