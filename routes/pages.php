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

// ROTA DEPOIMENTOS
$objRouter->get('/depoimentos', [
    function() { // função anônima
        return new Response(200, Pages\Testimony::getTestimonies());
    }
]);

$objRouter->post('/depoimentos', [
    function($request) { // função anônima
        return new Response(200, Pages\Testimony::getTestimonies());
    }
]);
