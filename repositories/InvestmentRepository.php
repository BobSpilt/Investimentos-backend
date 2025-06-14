<?php
require_once __DIR__ . '/../config/db.php';

class InvestmentRepository {
    private $conn;

    public function __construct() {
        $this->conn = DB::connect();
    }

    public function salvar(Investment $investment) {
        $stmt = $this->conn->prepare("INSERT INTO investimentos (nome, tipo, data, valor) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssd", $investment->nome, $investment->tipo, $investment->data, $investment->valor);
        return $stmt->execute();
    }
}