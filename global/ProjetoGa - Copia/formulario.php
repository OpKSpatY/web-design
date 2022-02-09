<?php

    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Telefone: ' . $_POST['telefone']);
        //print_r('<br>');
        //print_r('Sexo: ' . $_POST['genero']);
        //print_r('<br>');
        //print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        //print_r('<br>');
        //print_r('Cidade: ' . $_POST['cidade']);
        //print_r('<br>');
        //print_r('Estado: ' . $_POST['estado']);
        //print_r('<br>');
        //print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,cidade,estado,endereco)
        VALUES ('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

        header('Location: indexcopy.php');
    } 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Formulário | GN</title>
    
</head>
<body>
    <a id="return" href="indexcopy.php"><img src="img/seta.png"></a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend id="formlabel" ><b>FORMULÁRIO DE CADASTRO</b></legend>
                <div class="flex">
                    <img id="flex" src="img/elipse.png">
                    <div>
                        <p id="file" > Insira imagem aqui. </p>
                        <input type="file" >
                    </div>
                </div>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label id="labelsenha" for="senha" class="labelInput">Senha</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <div id="birthdate">
                    <label id="birth_date" for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>
                
                
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cidade" class="labelInput" placeholder="345.234.211-00">CPF <span>Ex: 243.211.445-00</span></label>
                </div>

                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="cargo" id="cargo" class="inputUser" required>
                    <label for="endereco" class="labelInput">Cargo</label>
                </div>

                <input type="submit" name="submit" id="submit" value="ENVIAR">
            </fieldset>
        </form>
    </div>
</body>
</html>