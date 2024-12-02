<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}

// Simulação de dados de validade de plano
$validadePlano = '2024-12-31';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validade do Plano - Gym Grizzly</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header class="site-header">
        <h1>Validade do Plano</h1>
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="treinos.php">Meus Treinos</a></li>
                <li><a href="validade-plano.php">Validade do Plano</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="validade-plano">
            <h2>Seu Plano é Válido até</h2>
            <p><?php echo htmlspecialchars($validadePlano); ?></p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Gym Grizzly. Todos os direitos reservados.</p>
    </footer>
</body>
</html>