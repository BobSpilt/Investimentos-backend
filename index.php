<?php
require_once __DIR__ . '/controllers/InvestmentController.php';

$controller = new InvestmentController();

// Coleta o que veio no $_GET['action']
$action = $_GET['action'] ?? '';

// Compara o valor de $action e chama o método correspondente
if ($action === 'json') {
    $controller->listarJSON();
}

if ($action === 'cadastrar') {

    $nome = $_POST['nome'] ?? '';
    $tipo = $_POST['tipo'] ?? '';
    $data = $_POST['data'] ?? '';
    $valor = $_POST['valor'] ?? '';

    if ($nome && $tipo && $data && $valor) {
    $controller->cadastrar($nome, $tipo, $data, $valor);
    }
}

if ($action === 'excluir') {
    $id = $_GET['id'] ?? '';
    if ($id) {
        $controller->excluir($id);
    }
}

if ($action === 'editar') {
    $id = $_GET['id'] ?? '';
    $nome = $_POST['nome'] ?? '';
    $tipo = $_POST['tipo'] ?? '';
    $data = $_POST['data'] ?? '';
    $valor = $_POST['valor'] ?? '';

    if ($id && $nome && $tipo && $data && $valor) {
        $controller->editar($id, $nome, $tipo, $data, $valor);
    }
}


?>