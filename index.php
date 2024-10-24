<?php

require "config.php";
require "helpers/banco.php";
require "helpers/auxiliares.php";
require "models/Tarefa.php";
require "models/Anexo.php";
require "models/RepositorioTarefas.php";

$repositorio_tarefas = new RepositorioTarefas($pdo);

$rota = "viaturas";

if (array_key_exists("rota", $_GET)) {
    $rota = $_GET["rota"];
}

// Adicione este log para verificar a rota sendo utilizada
error_log("Rota solicitada: " . $rota);

if (is_file("controllers/" . $rota . ".php")) {
    require "controllers/" . $rota . ".php";
} else {
    error_log("Arquivo não encontrado: controllers/" . $rota . ".php");
    require "controllers/404.php";
}
