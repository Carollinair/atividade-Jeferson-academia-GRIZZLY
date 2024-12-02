<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Academia Gym - Treinamento personalizado">
    <meta name="keywords" content="academia,fitness,treinamento">
    <title>Gym Academia</title>
    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="an…
 <!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Academia Gym - Treinamento personalizado">
    <meta name="keywords" content="academia,fitness,treinamento">
    <title>Gym Academia</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js" defer></script>
</head>
<body>  <?include_once 'carouserl.php';
?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: rgba(255, 255, 255, 0.8);">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="logo-2.png" alt="Gym Grizzly Logo" height="40">
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
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="inscricao_funcionarios.php">Funcionários

                        </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5 pt-5">
        <div class="card mx-0 rounded-3">
            <div class="card-body">
                <h5 class="card-title">Transforme sua Energia em Força!</h5>
                <p class="card-text">A Gym Grizzly é uma empresa de médio porte no setor de fitness e bem-estar, voltada para oferecer uma experiência completa de condicionamento físico. Atuando no segmento de academias e treinamento personalizado, a nossa academia diferencia-se pelo ambiente robusto e acolhedor, com foco em força, resistência e desenvolvimento físico. A academia oferece uma ampla gama de equipamentos modernos, áreas especializadas para musculação, treinamento funcional, e aulas coletivas. Seu público-alvo inclui desde iniciantes em busca de saúde até atletas de alto rendimento, com planos acessíveis e personalizados para diferentes objetivos.</p>
                <a href="sobre.php" class="btn btn-primary">Saiba mais sobre nós</a>
            </div>
        </div>
        
        <h2 class="text-center my-5">Modalidades</h2>
        <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4 d-flex">
                            <div class="card h-100">
                                <img src="musculação_img1.jpg" class="card-img-top" alt="Musculação">
                                <div class="card-body">
                                    <h5 class="card-title">Musculação</h5>
                                    <p class="card-text">Fortaleça seus músculos e melhore sua resistência com nosso completo programa de musculação.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="card h-100">
                                <img src="FITDANCE_img3.jpg" class="card-img-top" alt="Fit Dance">
                                <div class="card-body">
                                    <h5 class="card-title">Fit Dance</h5>
                                    <p class="card-text">Dance e queime calorias com nossas aulas de Fit Dance, uma combinação perfeita de coreografias modernas e exercícios aeróbicos para manter você em forma!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="card h-100">
                                <img src="zumba_img1.jpg" class="card-img-top" alt="Zumba">
                                <div class="card-body">
                                    <h5 class="card-title">Zumba</h5>
                                    <p class="card-text">Dance e exercite-se com nossas aulas de Zumba, uma atividade cheia de energia que combina passos de dança latina com exercícios aeróbicos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4 d-flex">
                            <div class="card h-100">
                                <img src="jiujitiso_img1.jpg" class="card-img-top" alt="Jiu-Jitsu">
                                <div class="card-body">
                                    <h5 class="card-title">Jiu-Jitsu</h5>
                                    <p class="card-text">Aprimore suas habilidades de autodefesa e melhore seu condicionamento físico com nossas aulas de Jiu-Jitsu, focadas em técnicas de grappling e submissão.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="card h-100">
                                <img src="MUAYTHAI_IMG3.jpg" class="card-img-top" alt="Muay-Thai">
                                <div class="card-body">
                                    <h5 class="card-title">Muay-Thai</h5>
                                    <p class="card-text">Aprenda autodefesa e melhore sua forma física com as intensas aulas de Muay-Thai.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="card h-100">
                                <img src="pilates_img2.jpg" class="card-img-top" alt="Pilates">
                                <div class="card-body">
                                    <h5 class="card-title">Pilates</h5>
                                    <p class="card-text">Melhore sua flexibilidade, força e postura com nossas aulas de Pilates, as nossas sessões de pilates são ótimas para fortalecer músculos e melhorar a flexibilidade.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </main>

    <footer class="site-footer bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2024 Gym Grizzly. Todos os direitos reservados.</p>
            <p> contato gymgrizzly.com.br | (11) 94276-1431</p>
            <p><strong>Instagram:</strong> <a href="https://www.instagram.com/gymgrizzly" target="_blank" class="text-white">@gymgrizzly</a></p>
        </div>
    </footer>
</body>
</html>