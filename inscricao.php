<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];
    
    // Configurações do email
    $to = $email;
    $subject = "Confirmação de Inscrição - Gym Grizzly";
    $message = "Olá $nome,\n\nObrigado por se inscrever na Gym Grizzly! Estamos ansiosos para te ajudar a alcançar seus objetivos de fitness.\n\nDetalhes da Inscrição:\nNome: $nome\nTelefone: $telefone\nMensagem: $mensagem\n\nAtenciosamente,\nEquipe Gym Grizzly";
    $headers = "From: gymgrizzly.com.br";

    // Enviar email
    if (mail($to, $subject, $message, $headers)) {
        $success = "Inscrição realizada com sucesso! Verifique seu email para a confirmação.";
    } else {
        $error = "Ocorreu um erro ao enviar o email de confirmação. Tente novamente.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição - Gym Grizzly</title>
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
        .form-matricula {
            background-color: #212529;
            color: white;
            padding: 20px;
            border-radius: 5px;
        }
        .form-matricula .form-control {
            background-color: #343a40;
            color: white;
            border: 1px solid #495057;
        }
        .form-matricula label {
            color: white;
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
                        <?php if (isset($_SESSION['email'])): ?>
                            <li class="nav-item"><a class="nav-link" href="Logout.php">Logout</a></li>
                        <?php else: ?>
                            <li class="nav-item"><a class="nav-link" href="Login.php">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container my-5">
        <section id="matricula" class="d-flex justify-content-center align-items-center flex-column">
            <h2>Formulário de Matrícula</h2>
            <form action="matricula.php" method="post" class="form-matricula w-100" style="max-width: 600px;" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="nome_completo">Nome Completo</label>
                    <input type="text" class="form-control" id="nome_completo" name="nome_completo" required>
                </div>
                <div class="form-group mb-3">
                    <label for="rg">RG</label>
                    <input type="text" class="form-control" id="rg" name="rg" required>
                </div>
                <div class="form-group mb-3">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required>
                </div>
                <div class="form-group mb-3">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto" required>
                </div>
                <div class="form-group mb-3">
                    <label for="reconhecimento_facial">Reconhecimento Facial</label>
                    <input type="file" class="form-control" id="reconhecimento_facial" name="reconhecimento_facial" required>
                </div>
                <div class="form-group mb-3">
                    <label for="problema_saude">Problema de Saúde</label>
                    <textarea class="form-control" id="problema_saude" name="problema_saude" rows="3" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="recomendacao_medica">Recomendação Médica</label>
                    <textarea class="form-control" id="recomendacao_medica" name="recomendacao_medica" rows="3" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <div class="form-group mb-3">
                    <label for="confirmar_senha">Confirmar Senha</label>
                    <input type="password" class="form-control" id="confirmar_senha" name="confirmar_senha" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </form>
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