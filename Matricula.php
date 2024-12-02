<?php
session_start();

// Simulação de autenticação de login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && isset($_POST['password'])) {
    $_SESSION['email'] = $_POST['email'];
}

// Verificar se o usuário está logado
$loggedIn = isset($_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Academia Gym - Treinamento personalizado">
    <meta name="keywords" content="academia,fitness,treinamento">
    <title>Gym Academia</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            padding-top: 70px; /* Espaço para o fixed navbar */
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
            background-color: white; /* Cor de fundo vermelho claro */
        }
        .card .card-header {
            background-color: #ff6666; /* Cor do cabeçalho vermelho */
            color: white;
        }
        .card-large {
            width: 20rem;
            height: 25rem;
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
                        <li class="nav-item"><a class="nav-link" href="Servicos.php">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="Sobre.php">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="Matricula.php">Matrícula</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#contact">Contato</a></li>
                        <?php if ($loggedIn): ?>
                            <li class="nav-item"><a class="nav-link" href="Logout.php">Logout</a></li>
                        <?php else: ?>
                            <li class="nav-item"><a class="nav-link" href="Login.php">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mt-5 pt-5">
        <?php if ($loggedIn): ?>
            <section id="dashboard">
                <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['email']); ?></h2>
                <nav>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="Treinos.php">Meus Treinos</a></li>
                        <li class="nav-item"><a class="nav-link" href="Validade-Planos.php">Validade do Plano</a></li>
                        <li class="nav-item"><a class="nav-link" href="Confirmação.php">Confirmação da Matrícula</a></li>
                    </ul>
                </nav>
            </section>
            <section id="treinos" class="my-5">
                <h2>Treino de Hoje</h2>
                <ul class="list-group">
                    <li class="list-group-item">Agachamento - 4x12</li>
                    <li class="list-group-item">Supino - 4x10</li>
                    <li class="list-group-item">Desenvolvimento - 4x10</li>
                    <li class="list-group-item">Remada Curvada - 4x12</li>
                </ul>
            </section>
            <section id="validade-plano" class="my-5">
                <h2>Validade do Plano</h2>
                <p>Seu plano é válido até: <strong>2024-12-31</strong></p>
            </section>
        <?php else: ?>
            <section id="plans" class="my-5">
                <h2 class="text-center">Escolha seu Plano</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 card-large">
                            <div class="card-header bg-danger text-white">Plano Platina</div>
                            <div class="card-body">
                                <h5 class="card-title">R$ 110,90 / mês</h5>
                                <p class="card-text">Acesso às áreas de Musculação e Cardio. Não inclui aulas coletivas (Fit Dance e Zumba), lutas (Jiu-Jitsu e Muay Thai), nem avaliação de Biompedância. Sessão de massagem mensal incluída.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 card-large">
                            <div class="card-header bg-danger text-white">Plano Mestre</div>
                            <div class="card-body">
                                <h5 class="card-title">R$ 223,90 /mês</h5>
                                <p class="card-text">Acesso a todas as áreas da academia, incluindo aulas coletivas (Fit Dance e Zumba), lutas (Jiu-Jitsu e Muay Thai), avaliação de Biompedância e funcional (Studio de Pilates).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-danger text-white">Plano Anual</div>
                            <div class="card-body">
                                <h5 class="card-title">R$ 1.200,00 / ano</h5> 
                                <p class="card-text">Acesso a todas as áreas da academia, incluindo as aulas coletivas (Fit Dance e Zumba), lutas (Jiu-Jitsu e Muay Thai), avaliação de Biompedância e funcional (Studio de Pilates).+
                                    SSessão de massagem mensal incluída.</p>
                                </div>.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="inscricao.php" class="btn btn-primary btn-lg">Inscreva-se Agora</a>
                </div>
            </section>
        <?php endif; ?>
    </main>
    <footer class="site-footer bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2024 Gym Grizzly. Todos os direitos reservados.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>