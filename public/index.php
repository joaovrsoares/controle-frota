<?php

require '../config/database.php';
require '../app/models/Viatura.php';
require '../app/controllers/ViaturaController.php';

$viaturas = new Viatura($pdo);

$rota = $_SERVER['REQUEST_URI'];
echo $rota;
echo 'joao\n';