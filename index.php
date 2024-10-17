<?php

require 'config/database.php';
require 'app/models/Viatura.php';
require 'app/controllers/Viatura.php';

$viaturas = new Viatura($pdo);

if ($_SERVER['REQUEST_URI'] === '') {
    $rota = "Viatura";
} else {
    $rota = $_SERVER['REQUEST_URI'];
}

if (is_file('/app/controllers/' . $rota . '.php')) {
    require '/app/controllers/' . $rota . '.php';
} else {
    require __DIR__ . '/app/controllers/404.php';
}