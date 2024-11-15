<?php include "config/cabecalho.php" ?>
<script>
    function logar() {
        var login = document.getElementById("Login").value
        var senha = document.getElementById("Senha").value

        if (login == "admin" && senha == "12345") {
            alert("Acesso permitido")
            location.href = "home.php";
        } else {
            alert("Senha Incorreta");
        }
    }
</script>


<body id="inicial">
    <div class="login">
        <div class="login-logo">
            <img src="img/csb_completo.svg" alt="Logo">
        </div>
        <div class="form-main">
            <div class="form">
                <h3>Faça login para sua conta da Hemotech Learning</h3>
                <div class="barra">
                    <hr>
                </div>

                <form>
                    <div class="p-3">
                        <label for="exampleInputEmail1" class="form-label">Usuário</label>
                        <input type="text" class="form-control" id="Login" aria-describedby="emailHelp">
                    </div>
                    <div class="p-3">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="Senha">
                    </div>
                    <!--  <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                    <div class="button-nav">
                        <button type="submit" onclick="logar(); return false" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>