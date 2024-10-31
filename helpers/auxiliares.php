<?php

function tem_post() {
    if (count($_POST) > 0) {
        return true;
    }
    return false;
}

function validar_data($data){
    $padrao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
    $resultado = preg_match($padrao, $data);

    if (! $resultado) {
        return false;
    }

    $dados = explode('/', $data);
    $dia = $dados[0];
    $mes = $dados[1];
    $ano = $dados[2];

    $resultado = checkdate($mes, $dia, $ano);

    return $resultado;
}

// Função para converter a situação de número para texto
function converte_concluida($concluida) {
    if ($concluida == 1) {
        return 'Sim';
    } else {
        return 'Não';
    }
}

// Função para converter a prioridade de número para texto
// Switch faz a comparação de uma variável com uma série de valores
function converte_prioridade($codigo) {
    $prioridade = '';
    switch ($codigo) {
        case '1':
            $prioridade = 'Baixa';
            break;
        case '2':
            $prioridade = 'Média';
            break;
        case '3':
            $prioridade = 'Alta';
            break;
    }
    return $prioridade;
}

// Função para converter a data do formato brasileiro para o formato do banco de dados
// 20/06/2024 > 2024-06-20
function converte_data_para_banco($data) {
    if ($data == '') {
        return '';
    }

    $dados = explode('/', $data);
    $data_mysql = "{$dados[2]}-{$dados[1]}-{$dados[0]}";
    return $data_mysql;
}

function converte_data_br_para_objeto($data) {
    if ($data == "") {
        return "";
    }

    $dados = explode("/", $data);

    if (count($dados) != 3) {
        return $data;
    }

    return DateTime::createFromFormat('d/m/Y', $data);
}

function converte_data_para_tela($data) {
    if (is_object($data) && get_class($data) == "DateTime") {
        return $data->format("d/m/Y");
    }

    if ($data == "" OR $data == "0000-00-00") {
        return "";
    }

    $dados = explode("-", $data);

    if (count($dados) != 3) {
        return $data;
    }

    $data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

    return $data_exibir;
}

function dias_restantes($dataFutura) {
    $dataAtual = new DateTime();
    $dataFutura = new DateTime($dataFutura);
    $diferenca = $dataAtual->diff($dataFutura);
    return $diferenca->days * ($diferenca->invert ? -1 : 1);
}

function quilometros_restantes($viatura) {
    $odometro = new Odometro();
    $kmDestino = 
    return $odometro->getQuilometragem() - $km;
}