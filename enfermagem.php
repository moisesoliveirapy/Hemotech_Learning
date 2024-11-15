<?php include "config/cabecalho.php" ?>
<link rel="stylesheet" href="css/style_pag_interna.css">

<body>

  <div>
    <nav class="navbar navbar-expand-lg bg-body-primary">
      <div class="container-fluid">
        <a href="home.php"><img class="logo" src="/img/csb_completo.svg" alt="" /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/home.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cursos externos</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                Categorias
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="enfermagem.php">Enfermagem</a></li>
                <li><a class="dropdown-item" href="">Faturamento</a></li>
                <li><a class="dropdown-item" href="#">Financeiro</a></li>
                <li>
                  <a class="dropdown-item" href="#">Sistema de Informação</a>
                </li>
                <li><a class="dropdown-item" href="#">Higienicação</a></li>
                <li><a class="dropdown-item" href="#">Reuso</a></li>
                <li><a class="dropdown-item" href="#">Recepção</a></li>
                <li><a class="dropdown-item" href="#">Médicina</a></li>
                <li><a class="dropdown-item" href="#">Contabiidade</a></li>
                <li><a class="dropdown-item" href="#">Administração</a></li>
                <li><a class="dropdown-item" href="#">Tasy</a></li>
                <li><a class="dropdown-item" href="#">Qualiex</a></li>
                <li><a class="dropdown-item" href="#">Neovero</a></li>
                <li><a class="dropdown-item" href="#">Weknow</a></li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <header>
    <h1>Materiais de Estudo</h1>
    <p>Explore nossos vídeos e PDFs para aprimorar seu conhecimento.</p>
  </header>

  <section class="material-cards">
    <!-- Card para Vídeo -->
    <div class="card">
      <h2>Introdução ao Treinamento</h2>
      <video controls class="media">
        <source src="videos/introducao.mp4" type="video/mp4">
        Seu navegador não suporta este vídeo.
      </video>
      <div class="card-buttons">
        <a href="videos/introducao.mp4" download class="btn">Baixar Vídeo</a>
        <button class="btn">Assistir</button>
      </div>
    </div>

    <!-- Card para PDF -->
    <div class="card">
      <h2>INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE</h2>
      <img src="/img/pdf-file.png" type="application/pdf" class="media" />
      <div class="card-buttons">
        <a href="pdfs/enfermagem/INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE.pdf" download class="btn">Baixar PDF</a>
        <button onclick="abrirModalPDF('pdfs/enfermagem/INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE.pdf')" class="btn">Ler PDF</button>
      </div>
    </div>
    <div class="card">
      <h2>INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE</h2>
      <img src="../img/pdf-file.png" type="application/pdf" class="media" />
      <div class="card-buttons">
        <a href="pdfs/enfermagem/INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE.pdf" download class="btn">Baixar PDF</a>
        <button onclick="abrirModalPDF('pdfs/enfermagem/INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE.pdf')" class="btn">Ler PDF</button>
      </div>
    </div>
    <div class="card">
      <h2>INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE</h2>
      <img src="../img/pdf-file.png" type="application/pdf" class="media" />
      <div class="card-buttons">
        <a href="pdfs/enfermagem/INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE.pdf" download class="btn">Baixar PDF</a>
        <button onclick="abrirModalPDF('pdfs/enfermagem/INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE.pdf')" class="btn">Ler PDF</button>
      </div>
    </div>
    <div class="card">
      <h2>INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE</h2>
      <img src="../img/pdf-file.png" type="application/pdf" class="media" />
      <div class="card-buttons">
        <a href="pdfs/enfermagem/INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE.pdf" download class="btn">Baixar PDF</a>
        <button onclick="abrirModalPDF('pdfs/enfermagem/INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE.pdf')" class="btn">Ler PDF</button>
      </div>
    </div>
    <div class="card">
      <h2>INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE</h2>
      <img src="../img/pdf-file.png" type="application/pdf" class="media" />
      <div class="card-buttons">
        <a href="pdfs/enfermagem/INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE.pdf" download class="btn">Baixar PDF</a>
        <button onclick="abrirModalPDF('pdfs/enfermagem/INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE.pdf')" class="btn">Ler PDF</button>
      </div>
    </div>
    <div class="card">
      <h2>INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE</h2>
      <img src="../img/pdf-file.png" type="application/pdf" class="media" />
      <div class="card-buttons">
        <a href="pdfs/enfermagem/INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE.pdf" download class="btn">Baixar PDF</a>
        <button onclick="abrirModalPDF('pdfs/enfermagem/INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE.pdf')" class="btn">Ler PDF</button>
      </div>
    </div>





    <div class="card">
      <h2></h2>
      <embed src="" type="application/pdf" class="media" />
      <div class="card-buttons">
        <a href="" download class="btn">Baixar PDF</a>
        <button onclick="abrirModalPDF('')" class="btn">Ler PDF</button>
      </div>
    </div>











    <!-- Modals -->

    <!-- Modal1 -->
    <div id="pdfModal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="fecharModal()">&times;</span>
        <iframe id="pdfViewer" src="pdfs/enfermagem/INQUÉRITO SOROLÓGICO PARA SARS-COV-2 E DETECÇÃO VIRAL EM CRIANÇAS EM HEMODIÁLISE.pdf" frameborder="0"></iframe>
      </div>
    </div>

    <!-- Modal2 -->
    <div id="pdfModal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="fecharModal()">&times;</span>
        <iframe id="pdfViewer" src="" frameborder="0"></iframe>
      </div>
    </div>

  </section>

<?php include "config/footer.php"?>
</body>

</html>