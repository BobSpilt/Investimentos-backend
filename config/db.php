<?php
class DB {
    public static function connect() {
        $conn = new mysqli("localhost", "root", "", "investimentos_db");
        if ($conn->connect_error) {
            die("Erro de conexão: " . $conn->connect_error);
        }
        return $conn;
    }
}
