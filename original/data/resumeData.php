<?php
    require_once "../app/actions/constantes.php";
    require_once "../app/actions/funciones.php";

    if(!isset($_SESSION['idioma'])) $_SESSION['idioma'] = getUserLanguage();
    require_once "resumeData_".$_SESSION['idioma'].".php";

