<?php

class Viatura {
    private $id = 0;
    private $prefixo = 0;
    private $placa = '';
    private $marca = '';
    private $modelo = '';
    private $ano = 0;
    private $limite = null;

    /**
     * @var Array de Odometro
     */
    private $odometros;

    public function __construct() {
        $this->odometros = [];
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setPrefixo($prefixo) {
        $this->prefixo = $prefixo;
    }

    public function getPrefixo() {
        return $this->prefixo;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getModelo() {
        return $this->modelo;
    }
    
    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setOdometros($odometros) {
        $this->odometros = [];

        foreach ($odometros as $odometro) {
            $this->adicionarOdometro($odometro);
        }
    }

    public function adicionarOdometro(Odometro $odometro) {
        array_push($this->odometros, $odometro);
    }

    public function getOdometros() {
        return $this->odometros;
    }

    public function setLimite($limite) {
        $this->limite = $limite;
    }

    public function getLimite() {
        if (is_string($this->limite) && !empty($this->limite)) {
            $this->limite = DateTime::createFromFormat('Y-m-d', $this->limite);
        } elseif ($this->limite == '') {
            $this->limite = null;
        }

        return $this->limite;
    }

}