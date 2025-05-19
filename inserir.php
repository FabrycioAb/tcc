<!DOCTYPE html>
<html lang="pt-BR">
<head>

<?php

//dados do formulario
$usuario = $_POST['usu'];
$senha = $_POST['snh'];


//conectar ao banco
$conexao = mysqli_connect("localhost", "root", "", "tcc");
include "conecta.php";

//guardar valores em uma variavel para o mysqli                                  
$sql = "INSERT INTO cadastro (usuario, senha) VALUES ('$usuario', '$senha')";

//inserir valores na tabela contatos                                             
mysqli_query($conexao,$sql);        

?>

    <meta charset="UTF-8">
    <title>Cadastro Realizado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .message-box {
            background-color: #ffffff;
            padding: 30px 50px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            text-align: center;
        }
        .message-box h1 {
            color:rgb(0, 0, 0);
            margin-bottom: 10px;
        }
        .message-box p {
            color: #555555;
            margin-bottom: 20px;
        }
        .message-box a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #003366;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .message-box a:hover {
            background-color: #003366;
        }
    </style>
</head>
<body>
    <div class="message-box">
        <h1>Cadastro realizado com sucesso!</h1>
        <p>Obrigado por se cadastrar.</p>
        <a href="login.html">Voltar para a página inicial</a>
    </div>
</body>
</html>


