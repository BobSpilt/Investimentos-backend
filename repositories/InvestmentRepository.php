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

   public function buscarTodos() {
        $sql = "SELECT * FROM investimentos";
        $result = $this->conn->query($sql);

        $investimentos = [];

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $investimentos[] = $row;
            }
        }

        return $investimentos;
    }

    public function editar(Investment $investment) {
        $stmt = $this->conn->prepare("UPDATE investimentos SET nome = ?, tipo = ?, data = ?, valor = ? WHERE id = ?");
        $stmt->bind_param("sssdi", $investment->nome, $investment->tipo, $investment->data, $investment->valor, $investment->id);
        return $stmt->execute();
    }

    public function excluir($id) {
        $stmt = $this->conn->prepare("DELETE FROM investimentos WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

   

    
}