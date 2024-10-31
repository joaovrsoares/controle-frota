<?php

class Odometro {
    private $id = 0;
    private $viatura_id = 0;
    private $quilometragem = '';
    private $data = '';

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setViaturaId($viatura_id) {
        $this->viatura_id = $viatura_id;
    }

    public function getViaturaId() {
        return $this->viatura_id;
    }

    public function setQuilometragem($quilometragem) {
        $this->quilometragem = $quilometragem;
    }

    public function getQuilometragem() {
        return $this->quilometragem;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        if (is_string($this->data) && !empty($this->data)) {
            $this->data = DateTime::createFromFormat('Y-m-d', $this->data);
        } elseif ($this->data == '') {
            $this->data = null;
        }

        return $this->data;
    }
}