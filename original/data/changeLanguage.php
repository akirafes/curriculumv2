<?php
require_once "../app/actions/constantes.php";
require_once "../app/actions/funciones.php";
$_SESSION['idioma'] = getPost("lg","get","en");
header('Content-Type: application/json');
?>
{"message":"ok"}