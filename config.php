<?php
$host = 'localhost'; // ou o endereço do servidor MySQL
$user = 'root'; // nome de usuário do banco de dados
$password = 'Titho@1810'; // senha do banco de dados
$database = 'sistema_marcacao_consultas'; // nome do banco de dados

// Tente criar a conexão
$conn = new mysqli($host, $user, $password, $database);

// Verifique se houve erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
