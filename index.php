<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MeuEstoque</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z"/>
</svg></a>
    <a class="navbar-brand" href="#">MeuEstoque</a>
    
</svg>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Menu Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Cadastrar Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=produtos">Cadastrar Produtos</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="?page=liprod">Listar Produtos</a>
        </li>
     
      </ul>
    </div>
  </div>
</nav>

    <div class="">
        <div class="row">
            <div class="col">

            <?php 

            include("config.php");


    switch(@$_REQUEST["page"]){
        case "novo":
            include("novo-usuario.php");
        break;
        case "listar":
            include("listar-usuario.php");
        break;
        case "salvar":
            include("salvar-usuario.php");
        break;
        case "editar":
            include("editar-usuario.php");
        break;
        case "produtos":
            include("cadastrar-produto.php");
        break;
        case "liprod":
            include("listar-produto.php");
        break;
        case "salvarprod":
            include("salvar-produto.php");
        break;
        case "editarprod":
            include("editar-produto.php");
        break;
        default:
            include("menu-principal.php");
    }

            ?>

            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"> </script>
  </body>

</html>