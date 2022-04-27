<?php

//POST- Oculta o caminho da url//
//GET- Mostra o caminho da url//

$nome = $_GET['nome'];
$idade = $_GET['idade'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "_terca_noite";

$con = mysqli_connect($servername,$username,$password,$database);

$sql = "insert into aluno(nome,idade) values('{$nome}',${idade})";

mysqli_query($con,$sql);

if(mysqli_affected_rows($con)>0){
  echo "Dados salvo com sucesso!";
}else{
  echo "Não foi possivel inserir!";
}

mysqli_close($con);

?>