<?php

$hostname = "127.0.0.1";
$user = "root";
$password = "root";
$database = "carteiramotorista";

$conexao = new mysqli($hostname, $user, $password, $database);

if($conexao->connect_errno) {
    echo "Failed to connect to MySQL: " . $conexao->connect_error;
    exit();
} else{
    // Evita caracteres especiais (SQL Inject)
    $nome = $conexao->real_escape_string($_POST['nome']);
    $idade = $conexao->real_escape_string($_POST['idade']);
    $carteira = $conexao->real_escape_string($_POST['carteira']);

    $sql = "INSERT INTO pessoa (`Nome`, `Idade`, `Carteira`) 
            VALUES ('".$nome."', '".$idade."' , '".$carteira."');";
   
    $resultado = $conexao->query($sql);

    $conexao->close();
    header('Location: index.php', true, 301);

}

?>