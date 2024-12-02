<?php
session_start();

// Verificar se o usuário está logado
if (isset($_SESSION['email'])) {
    // Redireciona para a página de treinos
    header('Location: Treinos.php');
    exit;
} else {
    // Se não estiver logado, redireciona de volta para a página de login
    header('Location: index.php');
    exit;
}
?>