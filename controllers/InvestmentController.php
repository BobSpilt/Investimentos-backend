<?php
require_once __DIR__ . '/../services/InvestmentService.php';

class InvestmentController {
    private $service;

    public function __construct() {
        $this->service = new InvestmentService();
    }

    public function cadastrar() {
        
            $nome = $_POST['nome'] ?? '';
            $tipo = $_POST['tipo'] ?? '';
            $data = $_POST['data'] ?? '';
            $valor = $_POST['valor'] ?? '';

            $sucesso = $this->service->cadastrar($nome, $tipo, $data, $valor);
        
    }

    public function listarJSON() {
        $investimentos = $this->service->listar();
        header('Content-Type: application/json');
        echo json_encode($investimentos);
    }

    public function excluir($id) {
        $sucesso = $this->service->excluir($id);
    }

    public function editar($id, $nome, $tipo, $data, $valor) {
        $sucesso = $this->service->editar($id, $nome, $tipo, $data, $valor);
    }
}