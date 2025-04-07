<?php
$host = 'localhost';  
$usuario = 'root';    
$senha = 'root'; 
$banco = 'Agenda'; 

$conexao = new mysqli($host, $usuario, $senha, $banco);


if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
} else {
    echo "Conectado com sucesso ao banco de dados!";
}

// $conexao->close();
?>
<?