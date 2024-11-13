<?php

$exibir_tabela = true;

$tem_erros = false;
$erros_validacao = [];

$viatura = new Viatura();

if (tem_post()) {
    if (array_key_exists('prefixo', $_POST) && strlen($_POST['prefixo']) > 0) {
        $viatura->setPrefixo($_POST['prefixo']);
    } else {
        $erros_validacao['prefixo'] = 'O prefixo da viatura é obrigatório!';
    }

    if (array_key_exists('placa', $_POST) && strlen($_POST['placa']) > 0) {
        $viatura->setPrefixo($_POST['placa']);
    } else {
        $erros_validacao['placa'] = 'A placa da viatura é obrigatória!';
    }

    if (array_key_exists('marca', $_POST) && strlen($_POST['marca']) > 0) {
        $viatura->setPrefixo($_POST['marca']);
    } else {
        $erros_validacao['marca'] = 'A marca da viatura é obrigatória!';
    }

    if (array_key_exists('modelo', $_POST) && strlen($_POST['modelo']) > 0) {
        $viatura->setPrefixo($_POST['modelo']);
    } else {
        $erros_validacao['modelo'] = 'O modelo da viatura é obrigatório!';
    }

    if (array_key_exists('ano', $_POST)) {
        $viatura->setAno($_POST['ano']);
    } else {
        $viatura['ano'] = '';
    }

    /*if (array_key_exists('prazo', $_POST) && strlen($_POST['prazo']) > 0) {
        if (validar_data($_POST['prazo'])) {
            $viatura->setPrazo(converte_data_br_para_objeto($_POST['prazo']));
        } else {
            $tem_erros = true;
            $erros_validacao['prazo'] = 'O prazo não é uma data válida!';
        }
    }*/

    if (! $tem_erros) {
        $repositorio_viaturas->salvar($viatura);
    
        header('Location: index.php?rota=viaturas');
        die();
    }
}

$viaturas = $repositorio_viaturas->buscar();

require __DIR__ . "/../views/template.php";