
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Treinos - Gym Grizzly</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header class="site-header">
        <h1>Meus Treinos</h1>
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
        <section id="treinos">
            <h2>Treino de Hoje</h2>
            <ul>
            <?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}


$treinos = [
    "Agachamento - 4x12",
    "Supino - 4x10",
    "Desenvolvimento - 4x10",
    "Remada Curvada - 4x12",
    "Levantamento Terra - 4x8",
    "Flexão de Braço - 4x15",
    "Tríceps Pulley - 4x12",
    "Leg Press - 4x12",
    "Abdominal - 4x20",
    "Corrida - 30 minutos"
];


$treinoDoDia = $treinos[array_rand($treinos)];
?>
                <li><?php echo $treinoDoDia; ?></li>
            </ul>
        </section>
    </main>
    <footer>
       
    </footer>
</body>
</html>