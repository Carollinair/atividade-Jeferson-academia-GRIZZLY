<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomeCompleto = $_POST['nome_completo'];
    $cpf = $_POST['cpf'];
    $cargo = $_POST['cargo'];
    $horarios = $_POST['horarios'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    // Verificar se as senhas correspondem
    if ($senha !== $confirmar_senha) {
        $error = "As senhas não correspondem.";
    } else {
        // Aqui você pode adicionar código para salvar as informações no banco de dados
        // Por exemplo:
        /*
        $conn = new mysqli('localhost', 'usuario', 'senha', 'banco');
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }
        $sql = "INSERT INTO funcionarios (nome_completo, cpf, cargo, horarios, senha) VALUES ('$nomeCompleto', '$cpf', '$cargo', '$horarios', '$senha')";
        if ($conn->query($sql) === TRUE) {
            header('Location: confirmacao.php');
            exit;
        } else {
            $error = "Erro: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        */
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição de Funcionários - Gym Grizzly</title>
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
        .form-inscricao {
            background-color: #212529;
            color: white;
            padding: 20px;
            border-radius: 5px;
        }
        .form-inscricao .form-control {
            background-color: #343a40;
            color: white;
            border: 1px solid #495057;
        }
        .form-inscricao label {
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
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container my-5">
        <section id="inscricao_funcionarios" class="d-flex justify-content-center align-items-center flex-column">
            <h2>Formulário de Inscrição de Funcionários</h2>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            <form action="inscricao_funcionarios.php" method="post" class="form-inscricao w-100" style="max-width: 600px;">
                <div class="form-group mb-3">
                    <label for="nome_completo">Nome Completo</label>
                    <input type="text" class="form-control" id="nome_completo" name="nome_completo" required>
                </div>
                <div class="form-group mb-3">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required>
                </div>
                <div class="form-group mb-3">
                    <label for="cargo">Cargo</label>
                    <input type="text" class="form-control" id="cargo" name="cargo" required>
                </div>
                <div class="form-group mb-3">
                    <label for="horarios">Horários</label>
                    <textarea class="form-control" id="horarios" name="horarios" rows="3" required></textarea>
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