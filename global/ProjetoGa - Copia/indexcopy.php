<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Global">
        <meta name="keywords" content="login, security">
        <title>Global Login</title>
        <link rel="stylesheet" type="text/css" href="indexcopy.css">
    </head>

    <body>
    <div id="main-content">
        <header>
            <div id="main-header">
                <hr>
                <img src="imgcopy/logo.png">
                <hr>
            </div>
        </header>

        <main>
            <div class="main-div">
                <img id="main-logo" src="imgcopy/gp1.png">
                <p id="global-acess" >Global Acess | For Events</p>
                <form action="testLogin.php" method="POST">
                    <div class="login">
                        <img src="img/img-2.png" alt="logo-login">
                        <input type="text" name="email" placeholder="Login" > <!-- adicionar required -->
                    </div>
                    <div class="senha">
                        <img src="img/img-3.png" alt="logo-senha">
                        <input type="password" name="senha" placeholder="Senha"> <!-- adicionar required -->
                    </div>
                    <div class="buttons">
                        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
                        <a class="inputSubmit" href="formulario.php">Cadastre-se</a>
                    </div>
                </form>
            </div>
        </main>
        <footer>
            <hr>
        </footer>
    </body>
</html>