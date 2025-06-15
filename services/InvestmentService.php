<?php
require_once __DIR__ . '/../models/Investment.php';
require_once __DIR__ . '/../repositories/InvestmentRepository.php';

class InvestmentService {
    private $repository;
    // Repositório de investimentos
    public function __construct() {
        $this->repository = new InvestmentRepository();
    }
    // Redireciona as a funções de cadastro, listagem, exclusão e edição para o repositório
    public function cadastrar($nome, $tipo, $data, $valor) {
        if (!$nome || !$tipo || !$data || !$valor) return false;
        $investment = new Investment($nome, $tipo, $data, $valor);
        return $this->repository->salvar($investment);
    }

    public function listar() {
        return $this->repository->buscarTodos();
    }

    public function excluir($id) {
        if (!$id) return false;
        return $this->repository->excluir($id);
    }

    public function editar($id, $nome, $tipo, $data, $valor) {
        if (!$id || !$nome || !$tipo || !$data || !$valor) return false;
        $investment = new Investment($nome, $tipo, $data, $valor, $id);
        return $this->repository->editar($investment);
    }

    
}
