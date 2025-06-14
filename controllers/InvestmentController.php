<?php
require_once __DIR__ . '/../services/InvestmentService.php';

class InvestmentController {
    private $service;

    public function __construct() {
        $this->service = new InvestmentService();
    }

    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'] ?? '';
            $tipo = $_POST['tipo'] ?? '';
            $data = $_POST['data'] ?? '';
            $valor = $_POST['valor'] ?? '';

            $sucesso = $this->service->cadastrar($nome, $tipo, $data, $valor);

            if ($sucesso) {
                echo "<h2>Investimento cadastrado com sucesso!</h2>";
            } else {
                echo "<h2>Erro ao cadastrar o investimento.</h2>";
            }
            echo '<a href="proj/../../investimentos-frontend/cadastro.html">Voltar</a>;';
        }
    }
}
