<?php
require_once __DIR__ . '/../services/InvestmentService.php';

class InvestmentController {
    private $service;

    public function __construct() {
        $this->service = new InvestmentService();
    }
    
    // Método para listar investimentos em formato JSON
    public function listarJSON() {
        $investimentos = $this->service->listar();
        header('Content-Type: application/json');
        echo json_encode($investimentos);
    }

    // Método para cadastrar um novo investimento
    public function cadastrar($nome, $tipo, $data, $valor) { 
            $sucesso = $this->service->cadastrar($nome, $tipo, $data, $valor);
    }
   
    // Métodos para excluir e editar investimentos
    public function excluir($id) {
        $sucesso = $this->service->excluir($id);
    }
    // Método para editar um investimento
    public function editar($id, $nome, $tipo, $data, $valor) {
        $sucesso = $this->service->editar($id, $nome, $tipo, $data, $valor);
    }
}