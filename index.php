<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Http\Router;
use \App\Controller\Pages\Home;

define('URL', 'http://localhost:8000');

$obj = new Router(URL);
echo "<pre>";
print_r($obj);
exit;

echo Home::getHome();
