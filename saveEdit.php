<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $nome = $_POST['nome'];
        $ra = $_POST['ra'];
        $situacao = $_POST['genero'];
        $dtc = $_POST['data_cadastro'];
        $senha = $_POST['senha'];
        $id = $_POST['id'];

        $sqlUpdate = "UPDATE usuarios SET nome= '$nome', ra= '$ra',status= '$situacao', data_cad='$dtc' , senha= '$senha'
        where id= '$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header("Location: sistema.php");


?>