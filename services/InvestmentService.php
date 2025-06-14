<?php
require_once __DIR__ . '/../models/Investment.php';
require_once __DIR__ . '/../repositories/InvestmentRepository.php';

class InvestmentService {
    private $repository;

    public function __construct() {
        $this->repository = new InvestmentRepository();
    }

    public function cadastrar($nome, $tipo, $data, $valor) {
        if (!$nome || !$tipo || !$data || !$valor) return false;
        $investment = new Investment($nome, $tipo, $data, $valor);
        return $this->repository->salvar($investment);
    }
}
