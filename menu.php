<style>
    #navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 999;
        opacity: 0; 
        visibility: hidden; 
        transition: opacity 0.1s, visibility 1s; 
    }

    .visible {
        background-color:black;
        opacity: 1 !important; 
        visibility: visible !important; 
        transition: opacity 0.5s, visibility 1s !important; 
    }

    a {
        color: black !important;
    }

</style>

<header id="navbar" >
    <nav class="d-flex  navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img class="navbar-brand" src="./logo-2.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item "><a class="nav-link" href="index.php#home">Início</a></li>
                <li class="nav-item"><a class="nav-link" href="Servicos.php">Serviços</a></li>
                <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="Matricula.php">Matrícula</a></li>
                <li class="nav-item"><a class="nav-link" href="Login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#contact">Contato</a></li>
                <li class="nav-item"><a class="nav-link" href="inscricao_funcionarios.php">Login</a></li>
                    </ul>
            </ul>
        </div>
    </nav>
</header>

<script>
    var navbar = document.getElementById('navbar');
    var lastScrollTop = 0; 
    var showPosition = 200; 

    window.onscroll = function() {
        var scrollPosition = window.scrollY || document.documentElement.scrollTop;

        if (scrollPosition > showPosition) {
            if (scrollPosition > lastScrollTop) {
                navbar.style.visibility = 'hidden';
                navbar.style.opacity = '0';
            } else if (scrollPosition < lastScrollTop) {
                navbar.style.visibility = 'visible';
                navbar.style.opacity = '1';
            }
        } else {
            navbar.style.visibility = 'visible';
            navbar.style.opacity = '1';
        }

        lastScrollTop = scrollPosition <= 0 ? 0 : scrollPosition; 
    };
</script>
