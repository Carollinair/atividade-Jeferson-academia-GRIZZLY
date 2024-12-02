<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}


$email = $_SESSION['email'];
$nome = $_SESSION['nome'];
$rg = $_SESSION['rg'];
$cpf = $_SESSION['cpf'];
$foto = $_SESSION['foto'];
$reconhecimento_facial = $_SESSION['reconhecimento_facial'];
$problema_saude = $_SESSION['problema_saude'];
$recomendacao_medica = $_SESSION['recomendacao_medica'];
$aulas = [
    "Agachamento - 4x12",
    "Supino - 4x10",
    "Desenvolvimento - 4x10",
    "Remada Curvada - 4x12"
];
$vencimento_matricula = "2024-12-31";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Aluno - Gym Grizzly</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 70px; /* Espaço para o fixed navbar */
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: rgba(255, 255, 255, 0.8);
        }
        .navbar .nav-link {
            color: black !important;
        }
        .navbar .navbar-brand img {
            height: 40px;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-body {
            background-color: #212529;
            color: white;
            border-radius: 5px;
        }
        .list-group-item {
            background-color: #343a40;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="logo-2.png" alt="Gym Grizzly Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php#home">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="servicos.php">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="matricula.php">Matrícula</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#contact">Contato</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container my-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Bem-vindo, <?php echo $nome; ?>!</h2>
                <p class="card-text"><strong>Email:</strong> <?php echo $email; ?></p>
                <p class="card-text"><strong>RG:</strong> <?php echo $rg; ?></p>
                <p class="card-text"><strong>CPF:</strong> <?php echo $cpf; ?></p>
                <div class="text-center mb-3">
                    <img src="<?php echo $foto; ?>" alt="Foto do Aluno" class="img-thumbnail" style="width: 150px; height: 150px;">
                </div>
                <h3 class="card-title mt-4">Aulas de Hoje</h3>
                <ul class="list-group list-group-flush">
                    <?php foreach ($aulas as $aula): ?>
                        <li class="list-group-item"><?php echo $aula; ?></li>
                    <?php endforeach; ?>
                </ul>
                <h3 class="card-title mt-4">Problema de Saúde</h3>
                <p class="card-text"><?php echo $problema_saude; ?></p>
                <h3 class="card-title mt-4">Recomendação Médica</h3>
                <p class="card-text"><?php echo $recomendacao_medica; ?></p>
                <h3 class="card-title mt-4">Vencimento da Matrícula</h3>
                <p class="card-text"><?php echo $vencimento_matricula; ?></p>
            </div>
        </div>
    </main>
    <footer class="site-footer bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 Gym Grizzly. Todos os direitos reservados.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>