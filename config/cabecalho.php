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
 