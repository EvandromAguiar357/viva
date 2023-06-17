<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body
        {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan , yellow);
            
        }
        
        div{
            background-color: rgba(0,0,0,0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: wheat;
        }

        input
        {
            padding: 15px;
            border-radius: none;
            outline: none;
            font-size: 15px;
        }

        .inputSubmit
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
        
        .inputSubmit:hover
        {
            background-color: deepskyblue;
        }
        
    </style>
</head>
<body>
    <a href="home.php">VOLTAR</a>
    <div>
        <h1>Login</h1>
            <form action="testLogin.php" method="POST">
            <input type="number" name="ra" placeholder="RA" 
                oninput="javascript: if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength = "10">
            <br><br>
            <input type="password" name="senha" placeholder="SENHA">
            <br><br>
            <input class= "inputSubmit" type="submit" name="submit" value = "Entrar">
        </form>
    </div>
    
</body>
</html>