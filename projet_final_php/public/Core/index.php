<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

// Récupère l'URL demandée
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Démarre le routeur
Router::route($url);
