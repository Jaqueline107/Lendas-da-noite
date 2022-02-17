<?php

session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "SELECT COUNT(*) AS TOTAL FROM usuario WHERE usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
echo $sql;


if($row == 1) {
    $_SESSION['usuario_existe'] = true;
    header('location: cadastro.php');
    exit;
  }   
  else{ 

    $insert = "INSERT INTO usuario(nome, usuario, senha, data_cadastro) VALUES('$nome','$usuario','$senha', NOW())";
  $exec_insert = mysqli_query($conexao, $insert);
  echo $insert;
  
if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: index.php');
exit;
  }
?>

