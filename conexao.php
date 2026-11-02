<?php
$host    = 'localhost';
$usuario = 'root';
$senha   = '';            
$banco   = 'loja_cds';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $connect = new mysqli($host, $usuario, $senha, $banco);
    $connect->set_charset('utf8mb4');   // acentos corretos
} catch (mysqli_sql_exception $e) {
    echo 'Erro ao conectar: ' . $e->getMessage();
    exit;
}