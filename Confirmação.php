<?php
session_start();

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
    <title>Confirmação da Matrícula - Gym Grizzly</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header class="site-header">
        <h1>Confirmação da Matrícula</h1>
    </header>
    <main class="container mt-5">
        <section id="confirmation" class="my-5">
            <h2 class="text-center">Matrícula Confirmada!</h2>
            <p class="text-center">Parabéns, <?php echo htmlspecialchars($_SESSION['email']); ?>! Sua matrícula foi confirmada com sucesso.</p>
            <div class="text-center">
                <a href="dashboard.php" class="btn btn-primary">Ir para o Dashboard</a>
            </div>
        </section>
    </main>
    <footer class="site-footer bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2024 Gym Grizzly. Todos os direitos reservados.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>