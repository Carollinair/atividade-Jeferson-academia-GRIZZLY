<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre a Gym Grizzly</title>
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
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="logo.png" alt="Gym Grizzly Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php#home">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="Servicos.php">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="matricula.php">Matrícula</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#contact">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container my-5">
        <section id="about">
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title mb-4">Nossa História</h2>
                    <p class="card-text">A Gym Grizzly foi fundada em 2019 com a missão de oferecer equipamentos de fitness inovadores para treinos em casa. Nossa visão é proporcionar uma alternativa acessível e eficaz às academias tradicionais, permitindo que nossos clientes treinem a qualquer hora e em qualquer lugar.</p>
                    
                    <h2 class="card-title mt-5 mb-4">O que Oferecemos</h2>
                    <p class="card-text">Na Gym Grizzly, oferecemos uma ampla variedade de equipamentos de fitness projetados para ajudar você a atingir seus objetivos de saúde e bem-estar. Nosso produto mais popular, o Home Muscle Builder, permite realizar diversos exercícios com diferentes posições de pegada, garantindo um treino completo e eficaz.</p>
                    
                    <h2 class="card-title mt-5 mb-4">Benefícios</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Proteção das Articulações:</strong> Equipamentos ergonômicos que reduzem a pressão nas articulações.</li>
                        <li class="list-group-item"><strong>Treino Eficiente:</strong> Variedade de exercícios e posições de pegada para um treino mais eficaz.</li>
                        <li class="list-group-item"><strong>Praticidade:</strong> Equipamentos portáteis e fáceis de usar para treinos em qualquer lugar.</li>
                    </ul>

                    <h2 class="card-title mt-5 mb-4">Comunidade Gym Grizzly</h2>
                    <p class="card-text">Temos uma comunidade crescente de mais de 25.000 clientes satisfeitos. Nosso suporte está disponível 24/7 para ajudar você a alcançar seus objetivos de fitness. Além disso, oferecemos garantia de satisfação de 30 dias e envio rápido de todos os nossos produtos.</p>

                    <h2 class="card-title mt-5 mb-4">Nosso Bordão</h2>
                    <p class="card-text"><strong>"Transforme sua Energia em Força!"</strong></p>
                    <p class="card-text">Esse bordão reflete nosso compromisso em ajudar você a canalizar sua energia e motivação para alcançar os melhores resultados em seus treinos.</p>
                </div>
            </div>
        </section>
        <section class="row mt-5">
            <div class="col-md-4">
                <h4>Sobre Nós</h4>
                <p>Informações sobre a empresa.</p>
            </div>
            <div class="col-md-4">
                <h4>Contatos</h4>
                <p>Email: gymgrizzly.com.br</p>
                <p>Telefone: +55 11 94276-1431</p>
            </div>
            <div class="col-md-4">
                <h4>Redes Sociais</h4>
                <p>
                    <a href="#" class="text-dark">Facebook</a> |
                    <a href="#" class="text-dark">Instagram</a> |
                    <a href="#" class="text-dark">Twitter</a>
                </p>
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