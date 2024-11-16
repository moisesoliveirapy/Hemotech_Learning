<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hemotech Learning</title>
    <link rel="stylesheet" href="css/style.css">
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>function abrirModalPDF(url) {
      const modal = document.getElementById("pdfModal");
      const pdfViewer = document.getElementById("pdfViewer");
    
      pdfViewer.src = url; // Define o PDF no iframe
      modal.style.display = "block"; // Exibe o modal
    }
    
    function fecharModal() {
      const modal = document.getElementById("pdfModal");
      const pdfViewer = document.getElementById("pdfViewer");
    
      modal.style.display = "none"; // Oculta o modal
      pdfViewer.src = ""; // Limpa o src para otimizar o carregamento
    }
    
    // Fecha o modal ao clicar fora do conteúdo
    window.onclick = function(event) {
      const modal = document.getElementById("pdfModal");
      if (event.target == modal) {
        fecharModal();
      }
    }
    </script>
  </head>
  <nav class="navbar navbar-expand-lg bg-body-primary">
      <div class="container-fluid">
        <a href="home.php"><img class="logo" src="img/csb_completo.svg" alt="Logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link active" href="home.php">Início</a></li>
            <li class="nav-item"><a class="nav-link active" href="cadastro.php">Cadastrar</a></li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Categorias</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="enfermagem.php">Enfermagem</a></li>
                <li><a class="dropdown-item" href="#">Faturamento</a></li>
                <li><a class="dropdown-item" href="#">Financeiro</a></li>
                <li><a class="dropdown-item" href="#">Sistema de Informação</a></li>
                <li><a class="dropdown-item" href="#">Higienização</a></li>
                <li><a class="dropdown-item" href="#">Reuso</a></li>
                <li><a class="dropdown-item" href="#">Recepção</a></li>
                <li><a class="dropdown-item" href="#">Medicina</a></li>
                <li><a class="dropdown-item" href="#">Contabilidade</a></li>
                <li><a class="dropdown-item" href="#">Administração</a></li>
                <li><a class="dropdown-item" href="#">Tasy</a></li>
                <li><a class="dropdown-item" href="#">Qualiex</a></li>
                <li><a class="dropdown-item" href="#">Neovero</a></li>
                <li><a class="dropdown-item" href="#">Weknow</a></li>

              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="index.php">Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>