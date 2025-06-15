<?php
require_once __DIR__ . '/controllers/InvestmentController.php';

$controller = new InvestmentController();


$action = $_GET['action'] ?? '';

if ($action === 'json') {
    $controller->listarJSON();
}

if ($action === 'cadastrar') {
    $controller->cadastrar();
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