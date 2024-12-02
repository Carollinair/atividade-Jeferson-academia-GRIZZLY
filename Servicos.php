<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços - Gym Grizzly</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        }
        .carousel-item {
            display: flex;
            justify-content: center;
        }
        .card {
            width: 18rem;
            margin: 0 10px;
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
                        <li class="nav-item"><a class="nav-link" href="index.php#contact">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container text-center">
            <h1 class="py-3 text-dark">Conheça alguns de nossos serviços oferecidos aos nossos clientes</h1>
        </div>
    </header>
    <main class="container my-5">
        <section id="services" class="text-center">
            <h2 class="text-center mb-4"></h2>
            <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-deck">
                            <div class="card">
                                <img src="servicos_img1.jpg" class="card-img-top" alt="Treinamento Personalizado">
                                <div class="card-body">
                                    <h5 class="card-title">Treinamento Personalizado</h5>
                                    <p class="card-text">Plano de treino individualizado para atingir seus objetivos de fitness.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="servicos_img2.jpg" class="card-img-top" alt="Aulas em Grupo">
                                <div class="card-body">
                                    <h5 class="card-title">Aulas em Grupo</h5>
                                    <p class="card-text">Dance e queime calorias com nossas aulas de Fit Dance e Zumba, uma combinação perfeita de coreografias modernas e exercícios aeróbicos para manter você em forma!</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="servicos_img3.jpg" class="card-img-top" alt="Consultoria Nutricional">
                                <div class="card-body">
                                    <h5 class="card-title">Consultoria Nutricional</h5>
                                    <p class="card-text">Receba orientação de nossos nutricionistas para uma alimentação saudável.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-deck">
                            <div class="card">
                                <img src="servicos_img4.jpg" class="card-img-top" alt="Avaliação Física">
                                <div class="card-body">
                                    <h5 class="card-title">Avaliação Física</h5>
                                    <p class="card-text">Acompanhe seu progresso com nossas avaliações físicas regulares.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#cardCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#cardCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>