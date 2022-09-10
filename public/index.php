<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


use Slim\Views\PhpRenderer;
$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/', function () {
	    return 'Main Page';
});


$app->get('/about', function ($request, $response) {
      $phpView = new PhpRenderer('../templates');
      return $phpView->render($response, 'about.phtml');
	});
$app->run();
