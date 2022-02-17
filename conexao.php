<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'jaqueapp');
define('SENHA', 'jaque@123');
define('DB', 'game');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>
