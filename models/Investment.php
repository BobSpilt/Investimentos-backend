<?php
class Investment {
    public $nome;
    public $tipo;
    public $data;
    public $valor;

    public function __construct($nome, $tipo, $data, $valor) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->data = $data;
        $this->valor = $valor;
    }
}