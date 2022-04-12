<?php

use \App\Http\Response;
use \App\Controller\Pages;

// ROTA HOME
$objRouter->get('/', [
    function() { // função anônima
        return new Response(200, Pages\Home::getHome());
    }
]);

// ROTA SOBRE
$objRouter->get('/sobre', [
    function() { // função anônima
        return new Response(200, Pages\About::getAbout());
    }
]);

// ROTA DINÂMICA
$objRouter->get('/pagina/{pageId}/{action}', [
    function($pageId, $action) { // função anônima
        return new Response(200, 'Página ' . $pageId . ' - ' . $action);
    }
]);