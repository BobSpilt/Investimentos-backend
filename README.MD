# Back-end do Sistema de Investimentos

Este diretório contém a API e scripts PHP que processam as requisições do front-end.

---

## ℹ️ Sobre o projeto

Este teste prático tem como objetivo desenvolver uma aplicação para controle simples de investimentos, permitindo **cadastrar**, **visualizar**, **editar** e **deletar** registros de ativos financeiros, como ações e fundos.

O back-end foi desenvolvido em **PHP**, utilizando a extensão **MySQLi** para comunicação com o banco de dados, retornando e recebendo dados em formato **JSON** para integração com o front-end via **AJAX**.

---

## 📌 Funcionalidades

- Recebe requisições AJAX do front-end
- Processa e responde dados no formato **JSON**
- Conecta ao banco de dados via **MySQLi**

---

## 📂 Estrutura dos arquivos

- `index.php`: Arquivo principal que pode servir como ponto de entrada da API.
- `config/db.php`: Responsável pela configuração e criação da conexão com o banco de dados (MySQL via MySQLi).
- `controllers/InvestmentController.php`: Controla as requisições relacionadas aos investimentos, recebendo chamadas do front-end e repassando para o serviço correspondente.
- `models/Investment.php`: Define a estrutura da entidade "Investimentos".
- `repositories/InvestmentRepository.php`: Responsável pelas operações diretas no banco de dados (CRUD).
- `services/InvestmentService.php`: Contém a lógica de negócio, conectando o controller ao repositório de forma organizada.

---

## 📋 Requisitos

- XAMPP ou outro ambiente com Apache/PHP/MySQL
- PHP 8.1.6

---

## ▶️ Como rodar

1. Crie uma pasta com o nome de `proj` em `htdocs`.
1. Clone repositório em `htdocs/proj` no XAMPP.
2. Inicie o Apache e o MySQL no painel do XAMPP.
3. Acesse `phpMyAdmin` em `http://localhost/phpmyadmin`.
4. Crie o banco de dados com o nome `investimentos_db` e importe o arquivo `investimentos.sql`.
5. Acesse `http://localhost/proj/investimentos-frontend/cadastro.html` no navegador.


