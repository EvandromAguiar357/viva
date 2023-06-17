<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['ra']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
    
        $ra = $_POST['ra'];
        $senha = $_POST['senha'];
        $variavavel = '';

        $sql = "SELECT * FROM usuarios 
        where ra = '$ra' 
        and senha = '$senha'
        and status = 'S' ";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['ra']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['ra'] = $ra;
            $_SESSION['senha'] = $senha; 
            header('Location: sistema.php');
        }

    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }



?>