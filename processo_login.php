<?php
session_start();

// Simulando credenciais válidas
$nome_valido = "Jessica";
$senha_valida = "Jessica123";

// Recebendo dados do formulário
$nome = $_POST['nome'];
$senha = $_POST['senha'];

// Verificando se as credenciais são válidas
if ($nome === $nome_valido && $senha === $senha_valida) {
    // Credenciais válidas
    $_SESSION['nome'] = $nome;
    header("Location: pagina_principal.php");
    exit;
} else {
    // Credenciais inválidas
    header("Location: login.php?erro=1");
    exit;
}
?>
