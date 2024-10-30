<?php

class RepositorioViaturas {

    private $bd;

    public function __construct(pdo $bd) {
        $this->bd = $bd;
    }

    public function salvar(Viatura $viatura) {
        $prefixo = $viatura->getPrefixo();
        $placa = $viatura->getPlaca();
        $marca = $viatura->getMarca();
        $modelo = $viatura->getModelo();
        $ano = $viatura->getAno();
        $limite = $viatura->getLimite();

        if (is_object($limite)) {
            $limite = "'{$limite->format('Y-m-d')}'";
        } elseif ($limite == '') {
            $limite = 'NULL';
        } else {
            $limite = "'{$limite}'";
        }

        $sqlGravar = "
            INSERT INTO viaturas
                (prefixo, placa, marca, modelo, ano, limite_manutencao)
            VALUES
                (
                    {$prefixo},
                    {$placa},
                    '{$marca}',
                    '{$modelo},
                    {$ano},
                    {$limite}
                )
        ";

        $this->bd->query($sqlGravar);
    }

    public function atualizar(Viatura $viatura) {
        $id = $viatura->getId();
        $prefixo = $viatura->getPrefixo();
        $placa = $viatura->getPlaca();
        $marca = $viatura->getMarca();
        $modelo = $viatura->getModelo();
        $ano = $viatura->getAno();
        $limite = $viatura->getLimite();

        if (is_object($limite)) {
            $limite = "'{$limite->format('Y-m-d')}'";
        } elseif ($limite == '') {
            $limite = 'NULL';
        } else {
            $limite = "'{$limite}'";
        }

        $sqlEditar = "
            UPDATE viaturas SET
                prefixo = {$prefixo},
                placa = {$placa},
                marca = {$marca},
                modelo = {$modelo},
                ano = {$ano},
                limite = {$limite}
            WHERE id = {$id}
        ";

        $this->bd->query($sqlEditar);
    }

    public function buscar($viatura_id = 0) { // : viatura|array {
        if ($viatura_id > 0) {
            return $this->buscar_viatura($viatura_id);
        } else {
            return $this->buscar_viaturas();
        }
    }

    private function buscar_viaturas() {
        $sqlBusca = 'SELECT * FROM viaturas';
        $resultado = $this->bd->query($sqlBusca);

        $viaturas = [];

        while ($viatura = $resultado->fetchObject('viatura')) {
            $viatura->setOdometros($this->buscar_odometros($viatura->getId()));
            $viaturas[] = $viatura;
        }

        return $viaturas;
    }

    private function buscar_viatura($id): Viatura {
        $sqlBusca = 'SELECT * FROM viaturas WHERE id = ' . $id;
        $resultado = $this->bd->query($sqlBusca);

        $viatura = $resultado->fetchObject('viatura');
        $viatura->setOdometro($this->buscar_anexos($viatura->getId()));

        return $viatura;
    }

    public function salvar_odometro(Odometro $odometro) {
        $sqlGravar = "
            INSERT INTO quilometragens
                (viatura_id, quilometragem, data)
            VALUES (
                '{$odometro->getViaturaId()}',
                '{$odometro->getOdometro()}',
                '{$odometro->getData()}'
            )
        ";

        $this->bd->query($sqlGravar);
    }

    public function buscar_odometros($viatura_id) { // :array {
        $sqlBusca = "SELECT * FROM quilometragens WHERE viatura_id = $viatura_id";
        $resultado = $this->bd->query($sqlBusca);
        $odometros = [];

        while ($odometro = $resultado->fetchObject('Odometro')) {
            $odometros[] = $odometro;
        }

        return $odometro;
    }

    public function buscar_anexo(/*int*/ $anexo_id) { //: Anexo {
        $sqlBusca = "SELECT * FROM anexos WHERE id = {$anexo_id}";
        $resultado = $this->bd->query($sqlBusca);

        return $resultado->fetchObject('Anexo');
    }

    public function remover(int $id) {
        $sqlRemover = "DELETE FROM anexos WHERE viatura_id = {$id}; DELETE FROM viaturas WHERE id = {$id}";

        $this->bd->query($sqlRemover);
    }

    public function remover_anexo(/*int*/ $id) {
        $sqlRemover = "DELETE FROM anexos WHERE id = {$id}";

        $this->bd->query($sqlRemover);
    }
}