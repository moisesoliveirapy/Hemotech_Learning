<?php include "config/cabecalho.php"; ?>

<header>
    <?php include "config/navegacao.php"; ?>
</header>

<body>
    <form action="config/inserirmateriais.php" method="post" enctype="multipart/form-data">
        <label for="titulo" class="form-label">Título</label>
        <div class="form-floating">
            <textarea class="form-control" id="titulo" name="titulo" style="height: 100px" required></textarea>
        </div>

        <div class="mb-3 form-check">
            <input type="radio" class="form-check-input" id="tipo" name="tipo" value="pdf" required>
            <label class="form-check-label" for="pdf">PDF</label>
            <hr>
            <input type="radio" class="form-check-input" id="tipo" name="tipo" value="video" required>
            <label class="form-check-label" for="video">Vídeo</label>
        </div>

       <!--  <div class="input-group mb-3">
            <label for="file" class="form-label">Upload de Arquivo:</label>
            <input type="file" class="form-control" id="file" name="file" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
        </div> -->

        <div class="mb-3">
            <label for="url" class="form-label">Upload via URL:</label>
            <input  class="form-control" id="arquivo" name="arquivo" placeholder="https://example.com/meuarquivo.pdf">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <!-- <?php include "config/footer.php"; ?> -->
</body>

<script>
    
</script>

</html>
