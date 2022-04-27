<?php

require('conexao.php'); 

mysqli_set_charset($conexao,"utf8");
$nome  = mysqli_real_escape_string($conexao, $_GET['nome']);
$idade = mysqli_real_escape_string($conexao, $_GET['idade']);

$sql="INSERT INTO aluno (nome, idade) VALUES ('$nome', '$idade')";

mysqli_query($conexao, $sql);

if (mysqli_affected_rows($conexao)>0) {
  	printf("%d linhas inseridas!\n", mysqli_affected_rows($conexao));
}else{
	printf("Nenhum linha foi inserida!");
}


$arr = array('Maria' => '15', 'Carlos' => '23', 'Vicente' => '17'); 

echo json_encode($arr)."\n";

mysqli_close($conexao);
?>