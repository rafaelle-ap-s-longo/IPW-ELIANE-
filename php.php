<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Aqui você pode adicionar validações e manipulações adicionais, como verificar se o e-mail já está em uso, etc.

    // Exibindo os dados cadastrados apenas para fins de demonstração
    echo "Nome: " . $nome . "<br>";
    echo "Cpf: " . $cpf . "<br>";
    echo "Telefone: " . $telefone . "<br>";
    echo "Email: " . $email . "<br>";
    // Não é uma boa prática exibir senhas, apenas para fins de exemplo
    echo "Senha: " . $senha;
}
?>
