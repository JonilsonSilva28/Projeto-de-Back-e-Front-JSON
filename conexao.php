<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', '_terca_noite');
 
$conexao = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (mysqli_connect_errno()) {
  echo "Falha na conexao com o MySQL: " . mysqli_connect_error();
  exit();
}


?>