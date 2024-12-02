<?php
// Simulação de autenticação de login
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['email'] = $_POST['email'];
}

// Verificar se o usuário está logado
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard do Aluno - Gym Grizzly</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header class="site-header">
        <h1>Bem-vindo ao seu Dashboard</h1>
        <nav>
            <ul>
                <li><a href="treinos.php">Meus Treinos</a></li>
                <li><a href="validade-plano.php">Validade do Plano</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="dashboard">
            <h2>Olá, <?php echo htmlspecialchars($_SESSION['email']); ?></h2>
            <p>Escolha uma opção no menu acima.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Gym Grizzly. Todos os direitos reservados.</p>
    </footer>
</body>
</html>