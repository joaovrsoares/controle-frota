<?php
require '../config/database.php';
require '../app/models/Viatura.php';
require '../app/controllers/ViaturaCtrl.php';

$viaturaModel = new Viatura($pdo);
$controller = new ViaturaCtrl($viaturaModel);
