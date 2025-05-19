<?php
//conectar ao banco
$bdServidor = "localhost";
$bdUsuario = "root";
$bdSenha = "";
$bdBanco = "tcc";

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

//$conexao = mysqli_connect("localhost", "root", "", "tcc");
?>