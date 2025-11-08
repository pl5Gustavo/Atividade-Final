<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_gustavo"; // nome do banco de dados que você vai criar no phpMyAdmin

// Conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];

// Insere os dados no banco
$sql = "INSERT INTO contatos (nome, email, assunto) VALUES ('$nome', '$email', '$assunto')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Mensagem enviada com sucesso!</h2>";
    echo "<a href='index.html'>Voltar</a>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
