<?php
// Conexão com o banco
$host = 'localhost';
$db = 'cadastro_db';
$user = 'seu_usuario';
$pass = 'sua_senha';

$conn = new mysqli($host, $user, $pass, $db);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Recebe os dados do formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$CPF = $_POST['CPF'];

// Prepara e executa o INSERT
$sql = "INSERT INTO alunos (nome, idade, CPF) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nome, $idade, $CPF);

if ($stmt->execute()) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

// Fecha conexão
$stmt->close();
$conn->close();
?>
