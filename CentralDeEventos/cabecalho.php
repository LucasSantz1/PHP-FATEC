<!doctype html>
<html lang="pt-Br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #f8f9fa;
      }
      .navbar {
        background-color: #007bff;
      }
      .navbar-brand, .nav-link {
        color: #ffffff !important;
      }
      .nav-link:hover {
        color: #d4d4d4 !important;
      }
      .container {
        margin-top: 2rem;
      }

      form {
        padding: 20px;
      }

      form div {
        margin: 10px 0px;
      }

      .form-control {
        width: 400px;
      }

      h3 {
        margin: 20px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Sistema de eventos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="cliente/index_cliente.php">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contratofornecedores/index.php">Contrato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/eventos/index.php">Eventos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fornecedores/index.php">Fornecedores</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <main class="container mt-4">
      <?php
        require_once("funcoes.php");
        if(conectarBanco()){
          echo '<div class="alert alert-success" role="alert">Conexão realizada com sucesso!</div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">Falha na conexão com o banco de dados.</div>';
        }
      ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Q6pi1lgp0Z02l0I1K2V0p8r0XO2E" crossorigin="anonymous"></script>
  </body>
</html>