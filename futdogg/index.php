<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fut do GG</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Fut do GG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Posição
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-posicao">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-posicao">Listar</a></li>
              </ul>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Jogador
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-jogador">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-jogador">Listar</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Técnico
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-tecnico">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-tecnico">Listar</a></li>
              </ul>
            </li>


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Partida
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-partida">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-partida">Listar</a></li>
              </ul>
            </li>

          </ul>

          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"/>
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <?php
                    include('config.php');

                    switch (@$_REQUEST['page']) {

                        // jogador
                        case 'cadastrar-jogador':
                            include('cadastrar-jogador.php');
                            break;
                        case 'listar-jogador':
                            include('listar-jogador.php');
                            break;
                        case 'editar-jogador':
                            include('editar-jogador.php');
                            break;
                        case 'salvar-jogador':
                            include('salvar-jogador.php');
                            break;

                        // técnico
                        case 'cadastrar-tecnico':
                            include('cadastrar-tecnico.php');
                            break;
                        case 'listar-tecnico':
                            include('listar-tecnico.php');
                            break;
                        case 'editar-tecnico':
                            include('editar-tecnico.php');
                            break;
                        case 'salvar-tecnico':
                            include('salvar-tecnico.php');
                            break;

                        // posicao
                        case 'cadastrar-posicao':
                            include('cadastrar-posicao.php');
                            break;
                        case 'listar-posicao':
                            include('listar-posicao.php');
                            break;
                        case 'editar-posicao':
                            include('editar-posicao.php');
                            break;
                        case 'salvar-posicao':
                            include('salvar-posicao.php');
                            break;

                        // partida
                        case 'cadastrar-partida':
                            include('cadastrar-partida.php');
                            break;
                        case 'listar-partida':
                            include('listar-partida.php');
                            break;
                        case 'editar-partida':
                            include('editar-partida.php');
                            break;
                        case 'salvar-partida':
                            include('salvar-partida.php');
                            break;

                        default:
                            print "<h1>Bem-vindo ao Sistema do Fut do GG</h1>";
                    }
                ?>
            </div>  
        </div>
    </div>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
