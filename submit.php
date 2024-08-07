<?php
include 'db_conect.php'; 

ini_set('display_erros', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL)
//COLETAR DADOS DO FORMULARIO
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
//CRIPTOGRAFAR A SENHA
$senha_criptografada = password_hash($senha, PASSWORD DEFAULT);   
    //
$sql = $conn->prepare("INSERT INTO usuarios (nome, sobrenome, cpf, email, senha) VALUES (?, ?, ?, ?, ?)");
$sql->bind_param("sssss", $nome, $sobrenome, $cpf, $email, $senha_criptografada);

if ($sql->execute()){
    echo "novo registro criado com sucesso";
} 
else{
    echo "erro:" .$sql->error;
}

$sql->close();
$com->close();
?>