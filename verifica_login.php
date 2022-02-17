<?php 
if(!$_SESSION['usuario']) {
    header('index.php');
    exit();
     session_start();
}
