<?php
require_once __DIR__ . '/../services/InvestmentService.php';

class InvestmentController {
    private $service;

    public function __construct() {
        $this->service = new InvestmentService();
    }

    // Método para cadastrar um novo investimento
    public function cadastrar() {
        
            $nome = $_POST['nome'] ?? '';
            $tipo = $_POST['tipo'] ?? '';
            $data = $_POST['data'] ?? '';
            $valor = $_POST['valor'] ?? '';

            $sucesso = $this->service->cadastrar($nome, $tipo, $data, $valor);
        
    }
    // Método para listar investimentos em formato JSON
    public function listarJSON() {
        $investimentos = $this->service->listar();
        header('Content-Type: application/json');
        echo json_encode($investimentos);
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