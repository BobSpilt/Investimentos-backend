<?php  
class Investment {
    public $id; 
    public $nome;
    public $tipo;
    public $data;
    public $valor;

    public function __construct($nome, $tipo, $data, $valor, $id = null) {
        if ($id !== null) {
            $this->id = $id;
        }
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->data = $data;
        $this->valor = $valor;
    }
}