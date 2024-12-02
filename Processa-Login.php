<?php
session_start();


$email = $_POST['email'];
$password = $_POST['password'];


if ($email == 'aluno@exemplo.com' && $password == 'senha123') {
    $_SESSION['email'] = $email;
    header('Location: Treinos.php'); 
    exit;
} else {
    
    header('Location: index.php?erro=1');
    exit;
}
?>