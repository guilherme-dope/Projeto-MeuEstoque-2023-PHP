<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeuEstoque</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Adicione o link da fonte do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <!-- Adicione a classe 'font-weight-bold' para tornar o texto mais ousado -->
            <a class="navbar-brand" href="index.php?page=novo"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z"/>
</svg></a>
    <a class="navbar-brand" href="index.php?page=novo">MeuEstoque</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Recursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Bem-vindo ao MeuEstoque</h1>
                    <p>Gerencie seu estoque de forma eficiente conosco.</p>
                    <a href="index.php?page=novo" class="btn btn-primary">Comece agora</a>
                </div>
                <div class="col-lg-6">
                <img src="https://blog.jetbov.com/wp-content/uploads/2020/01/estoque-2.png" jsaction="VQAsE" class="sFlh5c pT0Scc iPVvYb" style="max-width: 780px; height: 201px; margin: 0px; width: 351px;" alt="Como fazer o controle do estoque de sua propriedade ..." jsname="kn3ccd">
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <i class="fas fa-box"></i>
                    <h3>Controle de Estoque</h3>
                    <p>Gerencie seu estoque de maneira eficaz e mantenha tudo organizado.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-chart-bar"></i>
                    <h3>Relatórios Personalizáveis</h3>
                    <p>Crie relatórios personalizados para análises detalhadas.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Acesso Móvel</h3>
                    <p>Acesse seu estoque de qualquer lugar a qualquer momento.</p>
                </div>
            </div>
        </div>
</section>

    <section id="requirements" class="requirements">
        <div class="container">
            <h2>Requisitos Mínimos</h2>
            
            <ul>
                <li>Conexão com a internet</li>
                <li>Navegador web moderno (Chrome, Firefox, Safari, etc.)</li>
                <li>Dispositivo compatível (computador, tablet, smartphone)</li>
            </ul>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Contato</h2>
            <p>Use em caso de algum erro ou problema relacionados a nossa plataforma.</p>
            <p>Entre em contato conosco:</p>
            <ul>
                <li>Email: suporte@meuestoque.com</li>
                <li>Telefone: (24) 4002-8922</li>
            </ul>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> MeuEstoque. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
