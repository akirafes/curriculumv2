<?php
require_once "../../app/actions/constantes.php";
require_once "../../app/actions/funciones.php";
$title = getPost("title","get","Online-Quotation-System");
if(!isset($_SESSION['idioma'])) $_SESSION['idioma'] = getUserLanguage();
require_once "index_".$_SESSION['idioma'].".php";