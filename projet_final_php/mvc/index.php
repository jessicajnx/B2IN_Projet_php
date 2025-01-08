<?php
require_once 'Router.php';

$router = new Router();
$router->route($_SERVER['REQUEST_URI']);
