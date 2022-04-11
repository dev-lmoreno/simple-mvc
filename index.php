<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Http\Router;
use \App\Http\Response;
use \App\Controller\Pages\Home;

define('URL', 'http://localhost:8000');

$objRouter = new Router(URL);

// ROTA HOME
$objRouter->get('/', [
    function() { // função anônima
        return new Response(200, Home::getHome());
    }
]);

// IMPRIME O RESPONSE DA ROTA
$objRouter->run()
            ->sendResponse();