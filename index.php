<?php

require "config.php";
require "helpers/banco.php";
require "helpers/auxiliares.php";
require "models/Viatura.php";
require "models/Odometro.php";
require "models/RepositorioViaturas.php";

$repositorio_viaturas = new RepositorioViaturas($pdo);
$odometro = new Odometro();

$rota = "viaturas";

if (array_key_exists("rota", $_GET)) {
    $rota = $_GET["rota"];
}

error_log("Rota solicitada: " . $rota);

if (is_file("controllers/" . $rota . ".php")) {
    require "controllers/" . $rota . ".php";
} else {
    error_log("Arquivo não encontrado: controllers/" . $rota . ".php");
    require "controllers/404.php";
}
