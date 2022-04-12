<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Http\Router;
use \App\Utils\View;

define('URL', 'http://localhost:8000');

// DEFINE O VALOR PADRÃO DAS VARIÁVEIS
View::init([
    'URL' => URL
]);

// INICIA O ROUTER
$objRouter = new Router(URL);

// INCLUI AS ROTAS DE PÁGINAS
include __DIR__ . '/routes/pages.php';

// IMPRIME O RESPONSE DA ROTA
$objRouter->run()->sendResponse();