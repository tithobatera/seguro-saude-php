<?php
$host = 'localhost'; // ou o endereço do servidor MySQL
$user = ''; // nome de usuário do banco de dados
$password = ''; // senha do banco de dados
$dbname = ''; // nome do banco de dados

// Tente criar a conexão
$conn = new mysqli($host, $user, $password, $dbname);

// Verifique se houve erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
