<?php
include "conecta.php";
//SELECT * FROM = seleciona tudo. <'*'>
$sql = "SELECT * FROM cadastro";
$resultado = mysqli_query($conexao,$sql);

//Listar contatos
while($dados = mysqli_fetch_assoc($resultado)){
    echo "<center>";
      echo "ID: {$dados['id']}<br>";
      echo "NOME: {$dados['nome']}<br>";
      echo "SENHA: {$dados['telefone']}";
      echo "<hr>";
      echo"</center>";
}


//$dados = mysqli_fetch_assoc($resultado)
//echo'<pre>';
//print_r($dados);
//echo'</pre>';
?>