<?php

    if(isset($_POST["submit"]))
    {

        include_once('config.php');

        $nome = $_POST['nome'];
        $ra = $_POST['ra'];
        $situacao = $_POST['genero'];
        $dtc = $_POST['data_cadastro'];
        $senha = $_POST['senha'];

        
        $result = mysqli_query($conexao,"INSERT INTO usuarios(nome,status,ra,data_cad,senha)
        Values ('$nome','$situacao','$ra','$dtc','$senha')");

        header('Location: login.php');

    } 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | VIVA</title>
    <style>
        body
        {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan , yellow);
        }

        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0,0,0,0.8);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset
        {
            border: 3px solid dodgerblue;
        }

        legend
        {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
            
        }

        .inputBox
        {
            position: relative;
        }
        .inputUser
        {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: wheat;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput
        {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput
        {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #data_nascimento
        {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
        }

        .salvar
        {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color:white;
            font-size: 15px;
            cursor: pointer;
        }

        .salvar:hover
        {
            background-color: deepskyblue;
        }

    </style>
</head>
<body>
    <a href="home.php">VOLTAR</a>
    <div class="box">
        <form action="Viva.php" method="POST">
            <fieldset>
                <legend><b>CADASTRO DE ALUNOS</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha"  class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="ra" id="ra" class="inputUser" 
                    oninput="javascript: if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                    maxlength = "10"
                    required>
                    <label for="ra" class="labelInput">RA</label>
                </div>
                <br>
                <p>Situação do Aluno:</p>
                <input type="radio" id="ativos" name="genero" value="S" required>
                <label for="ativados">Ativos</label>
                <br><b>
                <br>   
                <input type="radio" id="n_ativos" name="genero" value="N" required>
                <label for="desativados">Não Ativos</label>
                <br><br>
                <br><br>
                <label for="data_nascimento"><b>Data de Cadastro<b></label>
                <input type="date" name="data_cadastro" id="data_cadastro" required>
                <br><br>
                <br><br>
                <input class="salvar" type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>