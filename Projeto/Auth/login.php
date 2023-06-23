<html>
    <head>
        <title>Login - Área Administrativa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <div class="container">
            <h1 class="text-left">Login - Área Administrativa</h1>
            <div class="row justify-content-start">
                <div class="col-lg-6">
                    <form class="login-form" method="POST" action="processa_login.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Usuário" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Senha" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <p class="forgot-password"><a href="#" onclick="showEmailPopup()">Esqueceu a senha?</a></p>
                    </form>
                </div>
            </div>
        </div>

        <!-- Pop-up de Email -->
        <div id="emailPopup" style="display: none;">
            <h3 class="text-left">Recuperação de Senha</h3>
            <form>
            <div class="form-group">
                <label for="email">Digite seu e-mail:</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <button type="button" class="btn btn-primary" onclick="sendEmail()">Enviar</button>
            </form>
        </div>

        <!-- Pop-up de Email Enviado -->
        <div id="emailSentPopup" style="display: none;">
            <h3 class="text-left">E-mail Enviado</h3>
            <p>Um e-mail de recuperação foi enviado para o endereço fornecido.</p>
        </div>

        <?php
            if ($_GET['invalid'] == true){
                echo '<script>alert("Credenciais inválidas.")</script>';
            }
        ?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="login.js"></script>
    </body>
</html>