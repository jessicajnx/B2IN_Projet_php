<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;

// Récupère l'URL
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Appelle le routeur
Router::route($url);
