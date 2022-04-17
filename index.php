<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Http\Router;
use \App\Utils\View;

// CARREGA VARIÁVEIS DE AMBIENTE
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

// DEFINE A CONSTANTE DA URL
define('URL', getenv('URL'));

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